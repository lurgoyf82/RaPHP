<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneStatoSinistroRequest;
use App\Http\Requests\UpdateImpostazioneStatoSinistroRequest;
use App\Models\ImpostazioneStatoSinistro;

class ImpostazioneStatoSinistroController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneStatoSinistro.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneStatoSinistro::class;
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
    public function store(StoreImpostazioneStatoSinistroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneStatoSinistro $impostazioneStatoSinistro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneStatoSinistro $impostazioneStatoSinistro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneStatoSinistroRequest $request, ImpostazioneStatoSinistro $impostazioneStatoSinistro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneStatoSinistro $impostazioneStatoSinistro)
    {
        //
    }
}
