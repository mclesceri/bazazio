<?php

namespace App\Http\Controllers;


use App\User;
use Input;
use Auth;
use App\Post;
use Validator;
use Request;
use Session;
use Redirect;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Serverfireteam\Panel\CrudController;

class PostController extends CrudController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	
	public function all($entity) {

        parent::all($entity);

        $this->filter = \DataFilter::source(new Post());
        $this->filter->add('id', 'ID', 'text');
        $this->filter->add('title', 'Title', 'text');
        $this->filter->submit('search');
        $this->filter->reset('reset');
        $this->filter->build();

        $this->grid = \DataGrid::source($this->filter);
        $this->grid->add('id', 'ID', true)->style("width:100px");
        $this->grid->add('title', 'Title');
        //$this->grid->add('image', 'Image');

        $this->addStylesToGrid();

        return $this->returnView();
    }
	
	
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
		}
		else
		{
			return Redirect::to('/login');
		}
	}
	
	public function newPost()
	{ 
		if(Auth::check()){
			
			return view('post.new');
		}
		else
		{
			return Redirect::to('/login');
		}
	}
	
	public function CreatePost()
	{
		if(Auth::check()){
			$postData = Input::all();
			$post = new Post;
			if(Input::hasFile('postpic')) {
      		//upload an image to the /img/tmp directory and return the filepath.
			$file = Input::file('postpic');
			$destinationPath = 'postpics';
			$tmpFileName = time() . '-' . $file->getClientOriginalName();
			$file = $file->move($destinationPath, $tmpFileName);
			
			$pic = $tmpFileName;
			$post->image = $pic;
			}
			
			
			$post->author = Auth::user()->id;
			$post->title = $postData['title'];
			$post->content = $postData['content'];
			$post->save();
			return Redirect::to('/');
			
		}
		else
		{
			return Redirect::to('/login');
		}
		
	}
	
	public function addLike($postid)
	{
		if(Auth::check()){
		Post::addLike($postid);
		return back();
		}else{
			return Redirect::to('/login');
		}
	}
	
	public function removeLike($postid)
	{
		if(Auth::check()){
		Post::removeLike($postid);
		return back();
		}else{
			return Redirect::to('/login');
		}
		
	}
	
	public function addComment()
	{
		if(Auth::check()){
			$commentdata = Input::all();
			Post::addComment($commentdata);
			return back();
		}else{
			return Redirect::to('/login');
		}
		
	}
	
	
}
