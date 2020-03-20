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

class HomeController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
	
	
	public function homepage()
	{
		$posts = Post::all();
		 return view('pages.home',array('posts' => $posts));
	}
	
	public function showWelcome()
	{
		return View::make('hello');
	}

	
}
