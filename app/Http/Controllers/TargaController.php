<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTargaRequest;
use App\Http\Requests\UpdateTargaRequest;
use App\Models\Targa;

class TargaController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\Targa.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\Targa::class;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTargaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Targa $targa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Targa $targa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTargaRequest $request, Targa $targa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Targa $targa)
    {
        //
    }
}
