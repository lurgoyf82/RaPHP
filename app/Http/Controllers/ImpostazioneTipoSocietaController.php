<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneTipoSocietaRequest;
use App\Http\Requests\UpdateImpostazioneTipoSocietaRequest;
use App\Models\ImpostazioneTipoSocieta;

class ImpostazioneTipoSocietaController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneTipoSocieta.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneTipoSocieta::class;
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
    public function store(StoreImpostazioneTipoSocietaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneTipoSocieta $impostazioneTipoSocieta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneTipoSocieta $impostazioneTipoSocieta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneTipoSocietaRequest $request, ImpostazioneTipoSocieta $impostazioneTipoSocieta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneTipoSocieta $impostazioneTipoSocieta)
    {
        //
    }
}
