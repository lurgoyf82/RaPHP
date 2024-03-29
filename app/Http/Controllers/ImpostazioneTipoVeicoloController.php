<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneTipoVeicoloRequest;
use App\Http\Requests\UpdateImpostazioneTipoVeicoloRequest;
use App\Models\ImpostazioneTipoVeicolo;

class ImpostazioneTipoVeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneTipoVeicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneTipoVeicolo::class;
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
    public function store(StoreImpostazioneTipoVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneTipoVeicolo $impostazioneTipoVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneTipoVeicolo $impostazioneTipoVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneTipoVeicoloRequest $request, ImpostazioneTipoVeicolo $impostazioneTipoVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneTipoVeicolo $impostazioneTipoVeicolo)
    {
        //
    }
}
