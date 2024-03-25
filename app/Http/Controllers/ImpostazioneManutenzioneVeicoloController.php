<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneManutenzioneVeicoloRequest;
use App\Http\Requests\UpdateImpostazioneManutenzioneVeicoloRequest;
use App\Models\ImpostazioneManutenzioneVeicolo;

class ImpostazioneManutenzioneVeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneManutenzioneVeicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneManutenzioneVeicolo::class;
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
    public function store(StoreImpostazioneManutenzioneVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneManutenzioneVeicolo $impostazioneManutenzioneVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneManutenzioneVeicolo $impostazioneManutenzioneVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneManutenzioneVeicoloRequest $request, ImpostazioneManutenzioneVeicolo $impostazioneManutenzioneVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneManutenzioneVeicolo $impostazioneManutenzioneVeicolo)
    {
        //
    }
}
