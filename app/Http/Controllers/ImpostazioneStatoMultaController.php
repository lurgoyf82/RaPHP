<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneStatoMultaRequest;
use App\Http\Requests\UpdateImpostazioneStatoMultaRequest;
use App\Models\ImpostazioneStatoMulta;

class ImpostazioneStatoMultaController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneStatoMulta.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneStatoMulta::class;
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
    public function store(StoreImpostazioneStatoMultaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneStatoMulta $impostazioneStatoMulta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneStatoMulta $impostazioneStatoMulta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneStatoMultaRequest $request, ImpostazioneStatoMulta $impostazioneStatoMulta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneStatoMulta $impostazioneStatoMulta)
    {
        //
    }
}
