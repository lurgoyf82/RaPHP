<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneFilialeVeicoloRequest;
use App\Http\Requests\UpdateImpostazioneFilialeVeicoloRequest;
use App\Models\ImpostazioneFilialeVeicolo;

class ImpostazioneFilialeVeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneFilialeVeicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneFilialeVeicolo::class;
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
    public function store(StoreImpostazioneFilialeVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneFilialeVeicolo $impostazioneFilialeVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneFilialeVeicolo $impostazioneFilialeVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneFilialeVeicoloRequest $request, ImpostazioneFilialeVeicolo $impostazioneFilialeVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneFilialeVeicolo $impostazioneFilialeVeicolo)
    {
        //
    }
}
