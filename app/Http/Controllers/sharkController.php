<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sharkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    echo "this is method to call index page using resource controller ";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "this is method to call create page using resource controller ";

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        echo 5;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
