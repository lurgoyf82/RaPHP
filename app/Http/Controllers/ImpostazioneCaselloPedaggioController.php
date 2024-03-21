<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneCaselloPedaggioRequest;
use App\Http\Requests\UpdateImpostazioneCaselloPedaggioRequest;
use App\Models\ImpostazioneCaselloPedaggio;

class ImpostazioneCaselloPedaggioController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneCaselloPedaggio.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneCaselloPedaggio::class;
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
    public function store(StoreImpostazioneCaselloPedaggioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneCaselloPedaggio $impostazioneCaselloPedaggio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneCaselloPedaggio $impostazioneCaselloPedaggio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneCaselloPedaggioRequest $request, ImpostazioneCaselloPedaggio $impostazioneCaselloPedaggio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneCaselloPedaggio $impostazioneCaselloPedaggio)
    {
        //
    }
}
