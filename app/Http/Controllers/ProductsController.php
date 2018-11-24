<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
//use DB
class ProductsController extends Controller
{
     public function index()
    {
        $products = Product::orderBy('name','asc')->paginate(5);
        //$products = Product::all();
        //$products = Product::orderBy('title','asc')->get(); to order items desc/asc ->take(1) for 1
        //$product = Product::where('name','Nasi Lemak')->get();
        /*return view('products', compact('products'));*/
        //$products = DB::select('SELECT* FROM PRODUCTS');
        return view('products.index')->with('products',$products);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return view('products.show')->with('product',$product);

    }

    public function edit($id){
        $product = Product::find($id);
        return view('products.edit')->with('product',$product); 
    }

    public function update(Request $request,$id)
    {
         //validation
         $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        
        //create product in database 
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->photo = $request->input('photo');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();

        return redirect('/products')->with('success','Post Updated');
    }

    public function create(){
        return view('products.create');
    }

    
    public function store(Request $request){
        //validation
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'description' => 'required'
        ]);
        
        //create product in database 
        $product = new Product;
        $product->name = $request->input('name');
        $product->photo = $request->input('photo');
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->user_id = auth()->user()->id;
        $product->save();

        return redirect('/products')->with('success','Post Created');
        
    }

    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        return redirect('/products')->with('success','Post Removed');
    }



    

 
    public function cart()
    {
        return view('cart');
    }


    public function addToCart($id)

    {
        $product = Product::find($id);
 
        if(!$product) {
 
            abort(404);
 
        }
 
        $cart = session()->get('cart');
 
        // if cart is empty then this the first product
        if(!$cart) {
 
            $cart = [
                    $id => [
                        "name" => $product->name,
                        "quantity" => 1,
                        "price" => $product->price,
                        "photo" => $product->photo
                    ]
            ];
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
        }
 
        // if cart not empty then check if this product exist then increment quantity
        if(isset($cart[$id])) {
 
            $cart[$id]['quantity']++;
 
            session()->put('cart', $cart);
 
            return redirect()->back()->with('success', 'Product added to cart successfully!');
 
        }
 
        // if item not exist in cart then add to cart with quantity = 1
        $cart[$id] = [
            "name" => $product->name,
            "quantity" => 1,
            "price" => $product->price,
            "photo" => $product->photo
        ];
 
        session()->put('cart', $cart);
 
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    //UPDATE AND REMOVE FROM THE CART
    /*public function update(Request $request)
    {
        if($request->id and $request->quantity)
        {
            $cart = session()->get('cart');
 
            $cart[$request->id]["quantity"] = $request->quantity;
 
            session()->put('cart', $cart);
 
            session()->flash('success', 'Cart updated successfully');
        }
    }*/
 
    public function remove(Request $request)
    {
        if($request->id) {
 
            $cart = session()->get('cart');
 
            if(isset($cart[$request->id])) {
 
                unset($cart[$request->id]);
 
                session()->put('cart', $cart);
            }
 
            session()->flash('success', 'Product removed successfully');
        }
    }
}

