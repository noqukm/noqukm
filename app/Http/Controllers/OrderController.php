<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Order;

class OrderController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:staff');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showOrderList()
    {
        $orders = Order::all();
        return view('orders', compact('orders'));
    }

    //DELETE ORDER ITEM

   public function remove($id)
    {
      $orders = Order::find($order);
      $orders->delete();

      return redirect('/manageOrder');
    }

}
