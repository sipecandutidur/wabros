<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductPackagesRequest;
use App\Http\Requests\UpdateProductPackagesRequest;
use App\Models\ProductPackages;

class ProductPackagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreProductPackagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductPackagesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProductPackages  $productPackages
     * @return \Illuminate\Http\Response
     */
    public function show(ProductPackages $productPackages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProductPackages  $productPackages
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductPackages $productPackages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductPackagesRequest  $request
     * @param  \App\Models\ProductPackages  $productPackages
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductPackagesRequest $request, ProductPackages $productPackages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProductPackages  $productPackages
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductPackages $productPackages)
    {
        //
    }
}
