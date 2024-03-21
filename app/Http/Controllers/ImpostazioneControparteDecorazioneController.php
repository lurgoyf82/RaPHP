<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneControparteDecorazioneRequest;
use App\Http\Requests\UpdateImpostazioneControparteDecorazioneRequest;
use App\Models\ImpostazioneControparteDecorazione;

class ImpostazioneControparteDecorazioneController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneControparteDecorazione.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneControparteDecorazione::class;
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
    public function store(StoreImpostazioneControparteDecorazioneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneControparteDecorazione $impostazioneControparteDecorazione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneControparteDecorazione $impostazioneControparteDecorazione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneControparteDecorazioneRequest $request, ImpostazioneControparteDecorazione $impostazioneControparteDecorazione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneControparteDecorazione $impostazioneControparteDecorazione)
    {
        //
    }
}
