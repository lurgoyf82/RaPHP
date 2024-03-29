<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneAssicurazioneVeicoloRequest;
use App\Http\Requests\UpdateImpostazioneAssicurazioneVeicoloRequest;
use App\Models\ImpostazioneAssicurazioneVeicolo;

class ImpostazioneAssicurazioneVeicoloController extends RaPHPController
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
    public function store(StoreImpostazioneAssicurazioneVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneAssicurazioneVeicolo $impostazioneAssicurazioneVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneAssicurazioneVeicolo $impostazioneAssicurazioneVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneAssicurazioneVeicoloRequest $request, ImpostazioneAssicurazioneVeicolo $impostazioneAssicurazioneVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneAssicurazioneVeicolo $impostazioneAssicurazioneVeicolo)
    {
        //
    }
}
