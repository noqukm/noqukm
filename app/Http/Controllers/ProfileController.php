<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Profile;
use Auth;


class ProfileController extends Controller
{
	public function index()
	{
		  return view('profile.index'); 
	}

	public function editProfile(Request $request)
	{
		  $this->validate($request, [
		  	'name'=> 'required',
		  	'profilepic'=> 'required',
		  	'email'=> 'required',
		  	'changepwd'=> 'required',
		  	'retypepwd'=> 'required',
		  ]);
		  $profiles = new Profile;
		  $profiles->name = $request->input('name');
		  $profiles->profilepic = $request->input('profilepic');
		  $profiles->email = $request->input('email');
		  $profiles->changepwd = $request->input('changepwd');
		  $profiles->retypepwd = $request->input('retypepwd');
		  $profiles->staff_id = Auth::user()-> id;
		  return Auth::user()-> id;
		  exit();

	}

}
    
    
