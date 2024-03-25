<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneAlimentazioneVeicoloRequest;
use App\Http\Requests\UpdateImpostazioneAlimentazioneVeicoloRequest;
use App\Models\ImpostazioneAlimentazioneVeicolo;

class ImpostazioneAlimentazioneVeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneAlimentazioneVeicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneAlimentazioneVeicolo::class;
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
    public function store(StoreImpostazioneAlimentazioneVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneAlimentazioneVeicolo $impostazioneAlimentazioneVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneAlimentazioneVeicolo $impostazioneAlimentazioneVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneAlimentazioneVeicoloRequest $request, ImpostazioneAlimentazioneVeicolo $impostazioneAlimentazioneVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneAlimentazioneVeicolo $impostazioneAlimentazioneVeicolo)
    {
        //
    }
}
