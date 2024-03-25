<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBolloRequest;
use App\Http\Requests\UpdateBolloRequest;
use App\Models\Bollo;

class BolloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\Bollo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\Bollo::class;
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
    public function store(StoreBolloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bollo $bollo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bollo $bollo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBolloRequest $request, Bollo $bollo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bollo $bollo)
    {
        //
    }
}
