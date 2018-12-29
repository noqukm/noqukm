<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Auth;


class ProfileController extends Controller
{
	public function __construct()
    {
       $this->middleware('auth', ['except' => ['logout', 'userLogout']]);
       //$this->middleware('auth');
    }

	public function index()
	{
		  $user = User::find(Auth::user()->id); 
		  return view('profile.index',["user" => $user]
		); 
	}

	public function editProfile(Request $input)
	{
		  $this->validate($input, [
		  	'name' => 'required|max:255',
        	'password' => 'min:6|confirmed'   
		  ]);

		$user = User::find(Auth::user()->id);
    	$user->name = $input["name"];
        if ($input->has('password')) 
        $user->password = bcrypt($input['password']);
    	$user->save();    	  	

    	//return redirect('/profile', 'Profile Edit Successfully');
    	return redirect()->intended(route('/profile'));

	}

}
    
    
