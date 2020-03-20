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

class AccountController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	
	public function updateUser()
	{
		if(Auth::check()){
		$userid = Auth::user()->id;
		$userdetail = $userCheck = User::where('id', '=', $userid)->first();
		$postData = Input::all();
		
			$user = User::find($userid);
			$user->username = $postData['name'];
			$user->location = $postData['location'];
			$user->city 	= $postData['city'];
			$user->state 	= $postData['state'];
			$user->country 	= $postData['country'];
			$user->save();
			return Redirect::to('/profile');
		}
		else
		{
			return Redirect::to('/login');
		}
	}
	
	
}
