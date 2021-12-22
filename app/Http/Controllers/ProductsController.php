<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products as Products;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $categories = Categories::with('Products')->get();

        return view('table', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View|Response
     */
    public function create()
    {
        return view('create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
//        $newImage = uniqid('', true). $request->movie_image;
//        $request->movie_image->move(public_path('images'),$newImage);
//        dd($newImage);


        $product = new Products();
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect('products');
    }

    /**
     * Display the specified resource.
     *
     * @param Products $products
     * @return Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Products $product
     * @return Application|Factory|View
     */
    public function edit(Products $product)
    {
        return view('edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param $product
     * @return RedirectResponse
     */
    public function update(Request $request , $product): RedirectResponse
    {
        $request->validate([
            'product_name' => 'required',
            'category_id'  => 'required',
        ]);
        $product = products::find($product);
        $product->product_name = $request->product_name;
        $product->category_id = $request->category_id;
        $product->save();
        return redirect()->route('products.index')
            ->with('success','Company Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Products $products
     * @return RedirectResponse
     */
    public function destroy(products $product): RedirectResponse
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
