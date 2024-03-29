<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneEnteVeicoloRequest;
use App\Http\Requests\UpdateImpostazioneEnteVeicoloRequest;
use App\Models\ImpostazioneEnteVeicolo;

class ImpostazioneEnteVeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneEnteVeicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneEnteVeicolo::class;
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
    public function store(StoreImpostazioneEnteVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneEnteVeicolo $impostazioneEnteVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneEnteVeicolo $impostazioneEnteVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneEnteVeicoloRequest $request, ImpostazioneEnteVeicolo $impostazioneEnteVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneEnteVeicolo $impostazioneEnteVeicolo)
    {
        //
    }
}
