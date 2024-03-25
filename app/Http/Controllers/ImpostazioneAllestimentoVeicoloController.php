<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneAllestimentoVeicoloRequest;
use App\Http\Requests\UpdateImpostazioneAllestimentoVeicoloRequest;
use App\Models\ImpostazioneAllestimentoVeicolo;

class ImpostazioneAllestimentoVeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneAllestimentoVeicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneAllestimentoVeicolo::class;
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
    public function store(StoreImpostazioneAllestimentoVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneAllestimentoVeicolo $impostazioneAllestimentoVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneAllestimentoVeicolo $impostazioneAllestimentoVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneAllestimentoVeicoloRequest $request, ImpostazioneAllestimentoVeicolo $impostazioneAllestimentoVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneAllestimentoVeicolo $impostazioneAllestimentoVeicolo)
    {
        //
    }
}
