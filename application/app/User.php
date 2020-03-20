<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Amsgames\LaravelShop\Traits\ShopUserTrait;


class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword; //,ShopUserTrait;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['firstname', 'lastname','email', 'password','dob','terms'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
	
	public static function getProfilePic($userid)
	{
		$userpic = User::where('id','=',$userid)->first();
		if($userpic)
		{
			return $userpic->profile_pic;
		}
		else
		{
			return false;
		}
		
	}
	
	public static function getUSerDetail($userid)
	{
		$userdata = User::where('id','=',$userid)->first();
		if($userdata)
		{
			return $userdata;
		}
		else
		{
			return false;
		}
		
	}
	
}
