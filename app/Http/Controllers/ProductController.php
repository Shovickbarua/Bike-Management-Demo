<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= DB::table('products')
                ->join('categories','products.cat_id','=','categories.id')
                ->get();
        return view('products.product_list',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();
        return view('products.add_product',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'product_name'  => 'required',
                'image'     => 'required|mimes:jpg,jpeg,png'
            ],
        );

        $product = new Product();
        if($request->has('image')){
            // dd($request);
             $image = $request->file('image');
             $name = time().uniqid().'.'.$image->extension();
             $image->move('storage/app/products',$name);
             $product->image = $name;
         }
        $product->product_name = $request->product_name;
        $product->cat_id = $request->cat_id;
        $product->quantity = $request->quantity;
        $product->cost = $request->cost;
        $product->sale = $request->sale;
        $product->dob =$request->dob;
        $product->save();

        return redirect(route('product.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$id)
    {
        $products= DB::table('products')
                ->join('categories','products.cat_id','=','categories.id')
                ->where('products.id','LIKE','%'.$request->id.'%')
                ->first();
       /* $products= DB::table('products')
                ->join('categories','products.cat_id','=','categories.id')
                ->where('products.product_name','LIKE','%'.$request->product_name.'%')
                ->first(); */
        return view('products.show_product',compact('products'));
    }

    public function downloadpdf(Request $request){
        $products= DB::table('products')
                ->join('categories','products.cat_id','=','categories.id')
                ->where('products.id','LIKE','%'.$request->id.'%')
                ->first();
        $pdf = Pdf::loadView('products.show_product', compact('products'));
        return $pdf->download('product.pdf');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories= Category::all();
        $product = Product::find($id);
        return view('products.product_edit',compact('product','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $product = Product::find($id);
        if($request->has('image')){
            // dd($request);
             $image = $request->file('image');
             $name = time().uniqid().'.'.$image->extension();
             $image->move('storage/app/products',$name);
             $product->image = $name;
         }
        $product->product_name = $request->product_name;
        $product->cat_id = $request->cat_id;
        $product->quantity = $request->quantity;
        $product->cost = $request->cost;
        $product->sale = $request->sale;
        $product->dob =$request->dob;
        $product->save();

        return redirect(route('category.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Product::destroy($product->id);
        return redirect(route('product.index'));
    }
}
