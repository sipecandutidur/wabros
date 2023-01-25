<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryContactRequest;
use App\Http\Requests\UpdateCategoryContactRequest;
use App\Models\CategoryContact;

class CategoryContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.category.index', [

        ]);
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
     * @param  \App\Http\Requests\StoreCategoryContactRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryContactRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategoryContact  $categoryContact
     * @return \Illuminate\Http\Response
     */
    public function show(CategoryContact $categoryContact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategoryContact  $categoryContact
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryContact $categoryContact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryContactRequest  $request
     * @param  \App\Models\CategoryContact  $categoryContact
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryContactRequest $request, CategoryContact $categoryContact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategoryContact  $categoryContact
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategoryContact $categoryContact)
    {
        //
    }
}
