<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneBrokerAssicurazioneRequest;
use App\Http\Requests\UpdateImpostazioneBrokerAssicurazioneRequest;
use App\Models\ImpostazioneBrokerAssicurazione;

class ImpostazioneBrokerAssicurazioneController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneBrokerAssicurazione.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneBrokerAssicurazione::class;
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
    public function store(StoreImpostazioneBrokerAssicurazioneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneBrokerAssicurazione $impostazioneBrokerAssicurazione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneBrokerAssicurazione $impostazioneBrokerAssicurazione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneBrokerAssicurazioneRequest $request, ImpostazioneBrokerAssicurazione $impostazioneBrokerAssicurazione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneBrokerAssicurazione $impostazioneBrokerAssicurazione)
    {
        //
    }
}
