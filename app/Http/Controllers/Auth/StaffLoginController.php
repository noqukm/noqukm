<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//use Illuminate\Support\Facades\Validator;
use Auth;

class StaffLoginController extends Controller
{
    public function __construct()
    {
    	$this->middleware('guest:staff',['except' => ['logout']]);
    }
   

     public function showLoginForm()
  
    {
        return view('auth.staff-login');
    }

    public function login(Request $request)
    {
        //Validate the form data
         $this->validate($request,
          [
            'email' =>'required',
            'password' => 'required|min:6'
         ]);

        //Attempt to log user in

        if (Auth::guard('staff')->attempt(['email' => $request->email,'password' => $request->password], $request->remember)) 
        {
        	  //if successful, then redirect to their intended location

        	return redirect()->intended(route('staff.dashboard'));
        }
        
        //if unsuccessful, then redirect to the login with the form data
        return redirect()->back()->withInput($request->only('email','remember'));

    }

     public function logout()
        {
            Auth::guard('staff')->logout();

            return redirect('/');
    }
}
