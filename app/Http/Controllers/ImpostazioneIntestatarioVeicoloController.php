<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneIntestatarioVeicoloRequest;
use App\Http\Requests\UpdateImpostazioneIntestatarioVeicoloRequest;
use App\Models\ImpostazioneIntestatarioVeicolo;

class ImpostazioneIntestatarioVeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneIntestatarioVeicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneIntestatarioVeicolo::class;
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
    public function store(StoreImpostazioneIntestatarioVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneIntestatarioVeicolo $impostazioneIntestatarioVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneIntestatarioVeicolo $impostazioneIntestatarioVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneIntestatarioVeicoloRequest $request, ImpostazioneIntestatarioVeicolo $impostazioneIntestatarioVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneIntestatarioVeicolo $impostazioneIntestatarioVeicolo)
    {
        //
    }
}
