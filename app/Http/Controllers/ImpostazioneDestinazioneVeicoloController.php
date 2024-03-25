<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneDestinazioneVeicoloRequest;
use App\Http\Requests\UpdateImpostazioneDestinazioneVeicoloRequest;
use App\Models\ImpostazioneDestinazioneVeicolo;

class ImpostazioneDestinazioneVeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneDestinazioneVeicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneDestinazioneVeicolo::class;
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
    public function store(StoreImpostazioneDestinazioneVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneDestinazioneVeicolo $impostazioneDestinazioneVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneDestinazioneVeicolo $impostazioneDestinazioneVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneDestinazioneVeicoloRequest $request, ImpostazioneDestinazioneVeicolo $impostazioneDestinazioneVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneDestinazioneVeicolo $impostazioneDestinazioneVeicolo)
    {
        //
    }
}
