<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneProprietarioVeicoloRequest;
use App\Http\Requests\UpdateImpostazioneProprietarioVeicoloRequest;
use App\Models\ImpostazioneProprietarioVeicolo;

class ImpostazioneProprietarioVeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneProprietarioVeicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneProprietarioVeicolo::class;
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
    public function store(StoreImpostazioneProprietarioVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneProprietarioVeicolo $impostazioneProprietarioVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneProprietarioVeicolo $impostazioneProprietarioVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneProprietarioVeicoloRequest $request, ImpostazioneProprietarioVeicolo $impostazioneProprietarioVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneProprietarioVeicolo $impostazioneProprietarioVeicolo)
    {
        //
    }
}
