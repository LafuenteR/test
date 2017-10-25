<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use Alert;
use App\personal_information;

class AccountController extends Controller
{
 	public function show()
	{
	if (Auth::check())
	{
		return redirect('/home');
	}
	    return view('homepage.welcome');
	}

    public function personInfo(Request $request)
    {
		$new_info = new personal_information;
		$new_info->nickname = $request->nickname;
		$new_info->user_id = Auth::user()->id;
		$new_info->age = $request->age;
		$new_info->weight = $request->weight;
		$new_info->height = $request->height;
		$new_info->birthdate = $request->birthdate;
		$new_info->save();

		Alert::success('Added Personal Information!');
		return back();
    }

    public function edit()
	{
		if (Auth::check())
		{
			$personal_info = personal_information::findUser();
			return view('logged.edit_account',compact('personal_info'));
		}
		else
		{
			return redirect('/');
		}
	}

    public function editInfo(Request $request)
    {
    	$edit_info = personal_information::findUser();
    	$edit_info->nickname = $request->nickname;
    	$edit_info->user_id = Auth::user()->id;
    	$edit_info->age = $request->age;
    	$edit_info->weight = $request->weight;
    	$edit_info->height = $request->height;
    	$edit_info->birthdate = $request->birthdate;
    	$edit_info->save();

    	Alert::success('Personal Information Updated!');
    	return redirect('/home');
    }

    public function deletePage()
    {
		if(Auth::check())
		{
			return view('logged.delete_account');
		}
		else
		{
			return redirect('/');
		}
    }

    public function delete()
	{
		$user = User::findUser();
		$user->archive = 'Deactive';
		$user->save();
		auth()->logout();
		return redirect('/');
	}

	public function editUser(Request $request)
	{
		$this->validate(request(),
			[
				'name' => 'required',
				'password' => 'required|confirmed'
			]);

		$editUser = User::findUser();
		$editUser->name = $request->name;
		$editUser->password = bcrypt($request->password);
		$editUser->save();
		Alert::success('User Account Updated!');
		return redirect('/home');
	}

   public function editUserAccount()
	{
		if (Auth::check())
		{
			return view('logged.user_account');
		}
		else
		{
			return redirect('/');
		}
	}

}
