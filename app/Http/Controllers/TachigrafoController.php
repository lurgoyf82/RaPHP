<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTachigrafoRequest;
use App\Http\Requests\UpdateTachigrafoRequest;
use App\Models\Tachigrafo;

class TachigrafoController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\Tachigrafo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\Tachigrafo::class;
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
    public function store(StoreTachigrafoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Tachigrafo $tachigrafo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tachigrafo $tachigrafo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTachigrafoRequest $request, Tachigrafo $tachigrafo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tachigrafo $tachigrafo)
    {
        //
    }
}
