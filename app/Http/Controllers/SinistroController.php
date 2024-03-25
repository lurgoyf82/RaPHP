<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSinistroRequest;
use App\Http\Requests\UpdateSinistroRequest;
use App\Models\Sinistro;

class SinistroController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\Sinistro.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\Sinistro::class;
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
    public function store(StoreSinistroRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Sinistro $sinistro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Sinistro $sinistro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSinistroRequest $request, Sinistro $sinistro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sinistro $sinistro)
    {
        //
    }
}
