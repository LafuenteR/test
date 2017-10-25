<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Alert;
use App\personal_information;

class LoginController extends Controller
{	
	// public function __construct()
 //   {
 //      $this->middleware('guest')->except('logout');
 //   }

    public function show()
	{
		if(Auth::check())
			{
				return redirect('/home');
			}
		return view('homepage.login');
	}


    public function welcomeLogin()
	{
		if (Auth::check())
		{
			$personal_info_bool = personal_information::personalInfoBool();
			$personal_info = personal_information::all();
			return view('logged.home',compact('personal_info_bool','personal_info'));
		}
		else
		{
			return redirect('/');
		}
	}

    public function login()
	{
		$this->validate(request(),[
		'email' => 'required',
		'password' => 'required'
		]);
		if (auth()->attempt(request(['email','password'])))
		{
			if (Auth::user()->archive == 'Deactive')
			{
				auth()->logout();
				return redirect('/login')->withInput()->withErrors('The account is already deleted');
			}
			Alert::success('Welcome!');
			return redirect('/home');
		}
		// session()->flash('message','Wrong Password or Email');
		Alert::success('Wrong Password or Email!');
		return back()->withInput()->withErrors('Wrong credentials');
	}

	public function logout()
	{
		auth()->logout();
		return redirect('/');
	}



}
