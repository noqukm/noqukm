<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Staff;
use Illuminate\Support\Facades\Auth;



class StaffRegisterController extends Controller
{
    //shows registration form to staff
  public function showRegistrationForm()
  {
      return view('auth.staff-register');
  }

  //Handles registration request for staff
    public function register(Request $request)
    {

       //Validates data
        $this->validator($request->all())->validate();

       //Create staff
        $staff = $this->create($request->all());

        //Authenticates staff
        $this->guard()->login($staff);

       //Redirects staffs

        return redirect()->intended(route('staff.dashboard'));
    }

    //Validates user's Input
    protected function validator(array $data)
    {
        return Validator::make($data, [

        	'name' => 'required|max:255',
          'staff_id' => 'required|max:255',
          'email' => 'required|email',
          'password' => 'required|min:6|confirmed'
        ]);
    }

    //Create a new staff instance after a validation.
    protected function create(array $data)
    {
        return Staff::create([
          'name' => $data['name'],
          'staff_id' => $data['staff_id'],
          'email' => $data['email'],
          'password' => bcrypt($data['password']),
        ]);
    }

     //Get the guard to authenticate Seller
   protected function guard()
   {
       return Auth::guard('staff');
   }

}
