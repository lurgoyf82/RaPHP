<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAtpRequest;
use App\Http\Requests\UpdateAtpRequest;
use App\Models\Atp;

class AtpController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\Atp.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\Atp::class;
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
    public function store(StoreAtpRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Atp $atp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Atp $atp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAtpRequest $request, Atp $atp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Atp $atp)
    {
        //
    }
}
