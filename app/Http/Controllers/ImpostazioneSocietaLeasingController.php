<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreImpostazioneSocietaLeasingRequest;
use App\Http\Requests\UpdateImpostazioneSocietaLeasingRequest;
use App\Models\ImpostazioneSocietaLeasing;

class ImpostazioneSocietaLeasingController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\ImpostazioneSocietaLeasing.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\ImpostazioneSocietaLeasing::class;
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
    public function store(StoreImpostazioneSocietaLeasingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImpostazioneSocietaLeasing $impostazioneSocietaLeasing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImpostazioneSocietaLeasing $impostazioneSocietaLeasing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateImpostazioneSocietaLeasingRequest $request, ImpostazioneSocietaLeasing $impostazioneSocietaLeasing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImpostazioneSocietaLeasing $impostazioneSocietaLeasing)
    {
        //
    }
}
