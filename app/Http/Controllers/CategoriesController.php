<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products as Products;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
//        $products  = Products::with('categories');
//        $categories = Categories::with('products');
//        return view('table', [
//            'products' => $products,
//            'categories' => $categories,
//
//        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Categories  $catigories
     * @return \Illuminate\Http\Response
     */
    public function show(Categories $catigories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Categories  $catigories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $catigories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Categories  $catigories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Categories $catigories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Categories  $catigories
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categories $catigories)
    {
        //
    }
}
