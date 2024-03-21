<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneCambioVeicoloRequest;
use App\Http\Requests\UpdateImpostazioneCambioVeicoloRequest;
use App\Models\ImpostazioneCambioVeicolo;

class ImpostazioneCambioVeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneCambioVeicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneCambioVeicolo::class;
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
    public function store(StoreImpostazioneCambioVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneCambioVeicolo $impostazioneCambioVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneCambioVeicolo $impostazioneCambioVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneCambioVeicoloRequest $request, ImpostazioneCambioVeicolo $impostazioneCambioVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneCambioVeicolo $impostazioneCambioVeicolo)
    {
        //
    }
}
