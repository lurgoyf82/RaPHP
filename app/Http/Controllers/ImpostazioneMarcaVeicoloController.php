<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneMarcaVeicoloRequest;
use App\Http\Requests\UpdateImpostazioneMarcaVeicoloRequest;
use App\Models\ImpostazioneMarcaVeicolo;

class ImpostazioneMarcaVeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneMarcaVeicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneMarcaVeicolo::class;
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
    public function store(StoreImpostazioneMarcaVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneMarcaVeicolo $impostazioneMarcaVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneMarcaVeicolo $impostazioneMarcaVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneMarcaVeicoloRequest $request, ImpostazioneMarcaVeicolo $impostazioneMarcaVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneMarcaVeicolo $impostazioneMarcaVeicolo)
    {
        //
    }
}
