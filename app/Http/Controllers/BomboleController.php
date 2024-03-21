<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBomboleRequest;
use App\Http\Requests\UpdateBomboleRequest;
use App\Models\Bombole;

class BomboleController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\Bombole.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\Bombole::class;
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
    public function store(StoreBomboleRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Bombole $bombole)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bombole $bombole)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBomboleRequest $request, Bombole $bombole)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bombole $bombole)
    {
        //
    }
}
