<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneStatoAssicurazioneRequest;
use App\Http\Requests\UpdateImpostazioneStatoAssicurazioneRequest;
use App\Models\ImpostazioneStatoAssicurazione;

class ImpostazioneStatoAssicurazioneController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneStatoAssicurazione.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneStatoAssicurazione::class;
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
    public function store(StoreImpostazioneStatoAssicurazioneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneStatoAssicurazione $impostazioneStatoAssicurazione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneStatoAssicurazione $impostazioneStatoAssicurazione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneStatoAssicurazioneRequest $request, ImpostazioneStatoAssicurazione $impostazioneStatoAssicurazione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneStatoAssicurazione $impostazioneStatoAssicurazione)
    {
        //
    }
}
