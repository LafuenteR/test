<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use Auth;

class personal_information extends Model
{
 	public static function personalInfoBool()
 	{
 		return static::where('user_id',Auth::user()->id)->exists();
 	}

 	public static function findUser()
 	{
 		return static::find(Auth::user()->id);
 	}

}
