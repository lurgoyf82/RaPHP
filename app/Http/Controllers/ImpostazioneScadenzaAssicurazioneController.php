<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneScadenzaAssicurazioneRequest;
use App\Http\Requests\UpdateImpostazioneScadenzaAssicurazioneRequest;
use App\Models\ImpostazioneScadenzaAssicurazione;

class ImpostazioneScadenzaAssicurazioneController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneScadenzaAssicurazione.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneScadenzaAssicurazione::class;
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
    public function store(StoreImpostazioneScadenzaAssicurazioneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneScadenzaAssicurazione $impostazioneScadenzaAssicurazione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneScadenzaAssicurazione $impostazioneScadenzaAssicurazione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneScadenzaAssicurazioneRequest $request, ImpostazioneScadenzaAssicurazione $impostazioneScadenzaAssicurazione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneScadenzaAssicurazione $impostazioneScadenzaAssicurazione)
    {
        //
    }
}
