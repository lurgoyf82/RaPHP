<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneTipoClienteRequest;
use App\Http\Requests\UpdateImpostazioneTipoClienteRequest;
use App\Models\ImpostazioneTipoCliente;

class ImpostazioneTipoClienteController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneTipoCliente.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneTipoCliente::class;
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
    public function store(StoreImpostazioneTipoClienteRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneTipoCliente $impostazioneTipoCliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneTipoCliente $impostazioneTipoCliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneTipoClienteRequest $request, ImpostazioneTipoCliente $impostazioneTipoCliente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneTipoCliente $impostazioneTipoCliente)
    {
        //
    }
}
