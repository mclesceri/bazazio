<?php

namespace App;
use DB;
use Auth;
use Carbon\Carbon;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Post extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'image','content'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
	
	public static function postLikes($postid)
	{
		$likes = DB::table('post_like')->where('post_id',$postid)->get();
		return count($likes);
	}
	
	public static function addLike($postid)
	{
		DB::table('post_like')->insert(
   			[
				'post_id' => $postid,
			 	'user_id' => Auth::user()->id,
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			 ]
			);
	}
	
	public static function removeLike($postid)
	{
		DB::table('post_like')->where('post_id','=', $postid)->where('user_id', '=', Auth::user()->id)->delete();
	}
	
	public static function postLiked($postid)
	{
		if(Auth::check()){
			$likes = DB::table('post_like')->where('post_id',$postid)->where('user_id', '=', Auth::user()->id)->first();
			if($likes){ return true;}
			else{ return false;}
		}
		else{return false;}
	}
	
	public static function addComment($commentdata = array())
	{
		DB::table('post_comments')->insert(
   			[
				'post_id' => $commentdata['postid'],
			 	'comment_author' => Auth::user()->id,
				'comments' => $commentdata['comment'],
				'created_at' => Carbon::now(),
				'updated_at' => Carbon::now(),
			 ]
			);
	}
	
	public static function getComments($postid)
	{
		
			$comments = DB::table('post_comments')->where('post_id',$postid)->get();
			if(count($comments) >0)
			{
				return $comments;
			}
			else
			{
				return false;
			}
	}
	
}
