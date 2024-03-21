<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneModelloVeicoloRequest;
use App\Http\Requests\UpdateImpostazioneModelloVeicoloRequest;
use App\Models\ImpostazioneModelloVeicolo;

class ImpostazioneModelloVeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneModelloVeicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneModelloVeicolo::class;
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
    public function store(StoreImpostazioneModelloVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneModelloVeicolo $impostazioneModelloVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneModelloVeicolo $impostazioneModelloVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneModelloVeicoloRequest $request, ImpostazioneModelloVeicolo $impostazioneModelloVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneModelloVeicolo $impostazioneModelloVeicolo)
    {
        //
    }
}
