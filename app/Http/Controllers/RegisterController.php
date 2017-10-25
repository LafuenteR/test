<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class RegisterController extends Controller
{
   public function __construct()
   {
      $this->middleware('guest')->except('logout');
   }

   public function show()
   {
   	return view('homepage.register');
   }
   
   public function register()
   {  
      
   $this->validate(request(),[
      'name' => 'required',
      'email' => 'required|email',
      'password' => 'required|confirmed'
   ]);


   $user = User::create([
      'name' => request('name'),
      'email' => request('email'),
      'password' => bcrypt(request('password'))
   ]);

   auth()->login($user);

   return redirect('/home');
      
   }
  
}
