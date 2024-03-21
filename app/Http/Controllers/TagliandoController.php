<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTagliandoRequest;
use App\Http\Requests\UpdateTagliandoRequest;
use App\Models\Tagliando;

class TagliandoController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\Tagliando.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\Tagliando::class;
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
    public function store(StoreTagliandoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tagliando $tagliando)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tagliando $tagliando)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTagliandoRequest $request, Tagliando $tagliando)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tagliando $tagliando)
    {
        //
    }
}
