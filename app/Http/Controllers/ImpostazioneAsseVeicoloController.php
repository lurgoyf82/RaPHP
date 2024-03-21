<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneAsseVeicoloRequest;
use App\Http\Requests\UpdateImpostazioneAsseVeicoloRequest;
use App\Models\ImpostazioneAsseVeicolo;

class ImpostazioneAsseVeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneAsseVeicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneAsseVeicolo::class;
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
    public function store(StoreImpostazioneAsseVeicoloRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneAsseVeicolo $impostazioneAsseVeicolo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneAsseVeicolo $impostazioneAsseVeicolo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneAsseVeicoloRequest $request, ImpostazioneAsseVeicolo $impostazioneAsseVeicolo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneAsseVeicolo $impostazioneAsseVeicolo)
    {
        //
    }
}
