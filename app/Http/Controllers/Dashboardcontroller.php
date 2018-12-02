<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class dashboardcontroller extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('menu')->with('products',$user->products);
    }
}
