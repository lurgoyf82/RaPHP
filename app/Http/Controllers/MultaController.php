<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMultaRequest;
use App\Http\Requests\UpdateMultaRequest;
use App\Models\Multa;

class MultaController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\Multa.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\Multa::class;
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
    public function store(StoreMultaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Multa $multa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Multa $multa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMultaRequest $request, Multa $multa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Multa $multa)
    {
        //
    }
}
