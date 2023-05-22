<?php

namespace App\Http\Controllers;


use App\Models\Product;
use App\Models\Maker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->authorizeResource(Product::class);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return  view('products.index',['goods'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $maker_list = Product::all();
        return view('products.create',['maker_list' => $maker_list]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::create([
            'title' => $request->input('title'),
            'maker' => $request->input('maker'),
            'price' => $request->input('price'),
            'data_make' => $request->input('data_make'),
            'maker_id' => $request->input('maker_id'),
        ]);
        return \redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('products.edit',['product'=>$product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product->update([
            'title' => $request->input('brand'),
            'maker' => $request->input('maker'),
            'price' => $request->input('price'),
            'data_make' => $request->input('data_make'),
            'maker_id' => $request->input('maker_id'),
        ]);

        return \redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return \redirect(route('products.index'));
    }
}
