<?php

namespace App\Http\Controllers;


use App\User;
use Input;
use Auth;
use Validator;
use Request;
use Session;
use Redirect;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RegisterController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	public function CreateUser()
	{
		$postData = Input::all();
		
		$messages = array(
			'firstname.required' => 'please enter first name',
			'lastname.required' => 'please enter last name',
			'email.required' => 'please enter email address',
			'password.required' => 'please enter password',
			);
              // apply validation rules to fields
	      $rules = array(
			'email' => 'required|email',
			'password' => 'required',
			'firstname' => 'required',
			'lastname' => 'required',
		       );
              // for default messages no need to pass $messages.
	      $validator = Validator::make($postData, $rules, $messages);
	      if ($validator->fails()){
                // validation fails redirect back to page.
			return Redirect::to('/register')->withInput()->withErrors($validator);
	      }
	      else
		  {
			  
              User::create([
            'firstname' => $postData['firstname'],
			'lastname' => $postData['lastname'],
            'email' => $postData['email'],
            'password' => bcrypt($postData['password']),
			'dob' => $postData['dob'],
			'terms' => $postData['terms'],
        	]);
			return Redirect::to('/login');
	      }
	}
	
	public function getLogin()
    {
        return view('auth.login');
    }

    public function postLogin()
    {
        $email      = Input::get('email');
        $password   = Input::get('password');
        $remember   = Input::get('remember');

        if(Auth::attempt([
            'email'     => $email,
            'password'  => $password
        ], $remember = 1))
        {
			
			return Redirect::to('/profile');
            /*if( $this->auth->user()->hasRole('user'))
            {
                return redirect()->route('pages.profile');
            }

            if( $this->auth->user()->hasRole('administrator'))
            {
                return redirect()->route('admin.home');
            }
*/
        }
        else
        {
            return redirect()->back()
                ->with('message','Incorrect email or password')
                ->with('status', 'danger')
                ->withInput();
        }

    }
	
	public function upload() 
	{
    	if(Input::hasFile('profilepic')) {
      //upload an image to the /img/tmp directory and return the filepath.
		  $file = Input::file('profilepic');
		  $destinationPath = 'profilepic';
		  $tmpFileName = time() . '-' . $file->getClientOriginalName();
		  $file = $file->move($destinationPath, $tmpFileName);
		  $user = User::find(Auth::user()->id);
		  $user->profile_pic = $tmpFileName;
		  $user->save();
		  return Redirect::to('/profile');
		} else {
		  return response()->json(false, 200);
		}
  	}
	
    public function getLogout()
    {
        \Auth::logout();

        return redirect()->route('auth.login')
            ->with('status', 'success')
            ->with('message', 'Logged out');

    }
	
	
}
