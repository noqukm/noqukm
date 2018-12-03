<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\Product;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:staff');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$user_id = auth()->user()->id;
        $user = Staff::find($user_id);*/
        $products = Product::orderBy('name','asc')->paginate(5);
        return view('menu')->with('products',$products);
    }
}
