<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMyStoreRequest;
use App\Http\Requests\UpdateMyStoreRequest;
use App\Models\MyStore;

class MyStoreController extends Controller
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
     * @param  \App\Http\Requests\StoreMyStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMyStoreRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MyStore  $myStore
     * @return \Illuminate\Http\Response
     */
    public function show(MyStore $myStore)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MyStore  $myStore
     * @return \Illuminate\Http\Response
     */
    public function edit(MyStore $myStore)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMyStoreRequest  $request
     * @param  \App\Models\MyStore  $myStore
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMyStoreRequest $request, MyStore $myStore)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MyStore  $myStore
     * @return \Illuminate\Http\Response
     */
    public function destroy(MyStore $myStore)
    {
        //
    }
}
