<?php

namespace App;
use DB;
use Auth;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;


class Chat extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;
	
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table='chats';
	
	
	public static function getFriends($userid)
	{
		$friends = DB::table('friends')->where('user_id',$userid)->get();	
		return $friends;
	}
} 