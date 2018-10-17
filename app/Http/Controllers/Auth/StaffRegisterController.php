<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Staff;
use Illuminate\Support\Facades\Auth;



class StaffRegisterController extends Controller
{
    //shows registration form to seller
  public function showRegistrationForm()
  {
      return view('staff.register');
  }

  //Handles registration request for seller
    public function register(Request $request)
    {

       //Validates data
        $this->validator($request->all())->validate();

       //Create seller
        $staff = $this->create($request->all());

        //Authenticates seller
        $this->guard()->login($staff);

       //Redirects sellers

        return redirect()->intended(route('staff.dashboard'));
    }

    //Validates user's Input
    protected function validator(array $data)
    {
        return Validator::make($data, [

        	'name' => 'required|max:255',
            'staff_id' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    //Create a new seller instance after a validation.
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
