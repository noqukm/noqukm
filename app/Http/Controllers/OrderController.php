<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Auth;
use App\Order;
use App\Notifications\OrderUpdated;
use Notifications;


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
        $orders = Order::paginate(5);
        return view('orders', ['orders' => $orders]);
    }

    // this pae will list all of the jedis in our database
   
    function notifyUser($id){
        // this is where the notification logic will be implemented
        $order = Order::findOrFail($id);
        $order->notify(new OrderUpdated($order));

        if($order->status){
        return redirect()->route('staffOrder')
            ->with('message', 'We have notified '.$order->cust_name.' that their order is fulfilled')
            ->with('status', 'info');
          }
    }
     
    function getOrderStatus($id){
         // get the jedi and toggle his/her lightsaber
        $order = Order::findOrFail($id);
        if($order->status){
            
            return redirect()->route('staffOrder')
            ->with('message', 'The Order for '.$order->cust_name.' is fulfilled')
            ->with('status', 'success');

        }else{
            return redirect()->route('staffOrder')
                ->with('message', 'The Order for '.$order->cust_name.' is currently in process')
                ->with('status', 'info');
        }
 
    }
     
    function toggleOrderStatus($id){
         
        $order = Order::findOrFail($id);
        $order->status = !$order->status;
        $order->save();
         
        if($order->status){
            return redirect()->route('staffOrder')
                ->with('message', 'The Order for '.$order->cust_name.' is fulfilled')
                ->with('status', 'success');
        }else{
            return redirect()->route('staffOrder')
                ->with('message', 'The Order for '.$order->cust_name.' is currently in process')
                ->with('status', 'warning');
        }
 
    }

    //DELETE ORDER ITEM
   public function remove($id)
    {

      $orders = Order::paginate(5);
      $orders->delete();

      return redirect('/manageOrder');
    }

}
