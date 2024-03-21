<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTelaioRequest;
use App\Http\Requests\UpdateTelaioRequest;
use App\Models\Telaio;

class TelaioController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\Telaio.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\Telaio::class;
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
    public function store(StoreTelaioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Telaio $telaio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Telaio $telaio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTelaioRequest $request, Telaio $telaio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Telaio $telaio)
    {
        //
    }
}
