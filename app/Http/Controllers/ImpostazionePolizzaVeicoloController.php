<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazionePolizzaVeicoloRequest;
use App\Http\Requests\UpdateImpostazionePolizzaVeicoloRequest;
use App\Models\ImpostazionePolizzaVeicolo;

class ImpostazionePolizzaVeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazionePolizzaVeicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazionePolizzaVeicolo::class;
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
    public function store(StoreImpostazionePolizzaVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazionePolizzaVeicolo $impostazionePolizzaVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazionePolizzaVeicolo $impostazionePolizzaVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazionePolizzaVeicoloRequest $request, ImpostazionePolizzaVeicolo $impostazionePolizzaVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazionePolizzaVeicolo $impostazionePolizzaVeicolo)
    {
        //
    }
}
