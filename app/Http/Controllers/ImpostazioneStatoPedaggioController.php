<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneStatoPedaggioRequest;
use App\Http\Requests\UpdateImpostazioneStatoPedaggioRequest;
use App\Models\ImpostazioneStatoPedaggio;

class ImpostazioneStatoPedaggioController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneStatoPedaggio.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneStatoPedaggio::class;
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
    public function store(StoreImpostazioneStatoPedaggioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneStatoPedaggio $impostazioneStatoPedaggio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneStatoPedaggio $impostazioneStatoPedaggio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneStatoPedaggioRequest $request, ImpostazioneStatoPedaggio $impostazioneStatoPedaggio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneStatoPedaggio $impostazioneStatoPedaggio)
    {
        //
    }
}
