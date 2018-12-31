<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Product;
use App\Order;
use App\Cart;
use Stripe\Charge;
use Stripe\Stripe;
use Auth;

class ProductsController extends Controller
{
  
      public function index()
    {
        $products = Product::paginate(6);
        $products = Product::orderBy('type','desc')->paginate(6);
        return view('product-index', ['products' => $products]);
    }
 
     public function getAddToCart(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart ($oldCart);
        $cart -> add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('product-index');
    }
    public function getAddItem(Request $request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart ($oldCart);
        $cart -> add($product, $product->id);

        $request->session()->put('cart', $cart);
        return redirect()->route('cart');
    }

    public function getRemoveByOne($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart ($oldCart);
        $cart->removeByOne($id);

        Session::put('cart', $cart);
        return redirect()->route('cart');
    }

    public function getRemoveItem($id)
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart ($oldCart);
        $cart->removeItem($id);

        if (count($cart->items) > 0) {
            Session::put('cart', $cart);
        }else {
            Session::forget('cart');
        }
        return redirect()->route('cart');
    }

    public function getCart()
    {
        if (!Session ::has('cart')) {
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view ('cart', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

     public function getCheckout()
     {
        if (!Session::has('cart')) {
            return view('cart');
    }
    $oldCart = Session::get('cart');
    $cart = new Cart ($oldCart);
    $total = $cart->totalPrice;
    return view ('checkout', ['total' => $total]);
    }

    public function postCheckout(Request $request){
        if (!Session::has('cart')) {
        return redirect()->route('cart');
    }
    $oldCart = Session::get('cart');
    $cart = new Cart ($oldCart);

        Stripe::setApiKey('sk_test_daNoCmKeFkumWMQlexvzaxPy');
        try {
            $charge = Charge::create(array(
                "amount" => $cart->totalPrice * 100 * 4,
                "currency" => "myr",
                "source" => $request->input('stripeToken'),
                "description" => "test charge"
            ) );
            $order = new Order();
            $order->cart = serialize($cart);
            $order->cust_name = $request->input('cust_name');
            $order->email = $request->input('email');
            $order->contact = $request->input('contact');
            $order->payment_id = $charge->id;
            $order->status=(0);
            $order->deleted_at=null;
            Auth::user()->orders()->save($order);

        }
        catch (\Exception $e){
            return redirect()->route('checkout')->with('error', $e->getMessage());
        }
        session::forget('cart');
        return redirect()->route('product-index')->with('success', 'Successfully ordered!');
    }

    public function orderReview(){

        if (!Session ::has('cart')) {
            return view('cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        return view ('review-order', ['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

}