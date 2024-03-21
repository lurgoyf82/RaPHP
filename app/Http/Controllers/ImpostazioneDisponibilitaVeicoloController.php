<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneDisponibilitaVeicoloRequest;
use App\Http\Requests\UpdateImpostazioneDisponibilitaVeicoloRequest;
use App\Models\ImpostazioneDisponibilitaVeicolo;

class ImpostazioneDisponibilitaVeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneDisponibilitaVeicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneDisponibilitaVeicolo::class;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreImpostazioneDisponibilitaVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneDisponibilitaVeicolo $impostazioneDisponibilitaVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneDisponibilitaVeicolo $impostazioneDisponibilitaVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneDisponibilitaVeicoloRequest $request, ImpostazioneDisponibilitaVeicolo $impostazioneDisponibilitaVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneDisponibilitaVeicolo $impostazioneDisponibilitaVeicolo)
    {
        //
    }
}
