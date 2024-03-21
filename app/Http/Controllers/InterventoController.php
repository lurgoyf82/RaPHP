<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInterventoRequest;
use App\Http\Requests\UpdateInterventoRequest;
use App\Models\Intervento;

class InterventoController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\Intervento.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\Intervento::class;
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
    public function store(StoreInterventoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Intervento $intervento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Intervento $intervento)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInterventoRequest $request, Intervento $intervento)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Intervento $intervento)
    {
        //
    }
}
