<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneStatoVeicoloRequest;
use App\Http\Requests\UpdateImpostazioneStatoVeicoloRequest;
use App\Models\ImpostazioneStatoVeicolo;

class ImpostazioneStatoVeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneStatoVeicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneStatoVeicolo::class;
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
    public function store(StoreImpostazioneStatoVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneStatoVeicolo $impostazioneStatoVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneStatoVeicolo $impostazioneStatoVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneStatoVeicoloRequest $request, ImpostazioneStatoVeicolo $impostazioneStatoVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneStatoVeicolo $impostazioneStatoVeicolo)
    {
        //
    }
}
