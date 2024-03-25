<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneSocietaVeicoloRequest;
use App\Http\Requests\UpdateImpostazioneSocietaVeicoloRequest;
use App\Models\ImpostazioneSocietaVeicolo;

class ImpostazioneSocietaVeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneSocietaVeicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneSocietaVeicolo::class;
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
    public function store(StoreImpostazioneSocietaVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneSocietaVeicolo $impostazioneSocietaVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneSocietaVeicolo $impostazioneSocietaVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneSocietaVeicoloRequest $request, ImpostazioneSocietaVeicolo $impostazioneSocietaVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneSocietaVeicolo $impostazioneSocietaVeicolo)
    {
        //
    }
}
