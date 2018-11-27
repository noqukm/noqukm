<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
//use DB
use App\Product;


class MenuController extends Controller
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
            'photo' => 'image|nullable|max:1999',
            'description' => 'required'
        ]);

         //Handle File Upload
         if($request->hasFile('photo')){
            //Get filename with the extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('photo')->getClientOriginalExtension();
            //Filename to store
            $fileNametoStore= $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('photo')->storeAs('public/photos',$fileNametoStore);
         }
        
        //create product in database 
        $product = Product::find($id);
        $product->name = $request->input('name');
        if($request->hasfile('photo')){
            $product->photo= $fileNametoStore;
        }
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->save();
        return redirect('/dashboard')->with('success','Post Updated');
    }
    public function create(){
        return view('products.create');
    }
    
    public function store(Request $request){
        //validation
        $this->validate($request,[
            'name' => 'required',
            'price' => 'required',
            'photo' => 'image|nullable|max:1999',
            'description' => 'required'
        ]);

        //Handle File Upload
        if($request->hasFile('photo')){
            //Get filename with the extension
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            //Get just filename
            $filename = pathinfo($filenameWithExt,PATHINFO_FILENAME);
            //Get just extension
            $extension = $request->file('photo')->getClientOriginalExtension();
            //Filename to store
            $fileNametoStore= $filename.'_'.time().'.'.$extension;
            //Upload Image
            $path = $request->file('photo')->storeAs('public/photos',$fileNametoStore);
        }else{
            $fileNametoStore = 'noimage.jpg';
        }
        
        //create product in database 
        $product = new Product;
        $product->name = $request->input('name');
        $product->photo = $fileNametoStore;
        $product->price = $request->input('price');
        $product->description = $request->input('description');
        $product->user_id = auth()->user()->id;
        $product->save();
        return redirect('/dashboard')->with('success','Post Created');
        
    }
    public function destroy($id){
        $product = Product::find($id);
        $product->delete();
        if($product->photo !='noimage.jpg'){
                //Delete Image
                Storage::delete('public/photos/'.$product->photo);
        }
        return redirect('/dashboard')->with('success','Post Removed');
    }
}
