<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRevisioneRequest;
use App\Http\Requests\UpdateRevisioneRequest;
use App\Models\Revisione;
use Illuminate\Http\Request;

class RevisioneController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\Revisione.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\Revisione::class;
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
    public function store(StoreRevisioneRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Revisione $revisione)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Revisione $revisione)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRevisioneRequest $request, Revisione $revisione)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Revisione $revisione)
    {
        //
    }

    public function alert(Request $request) {
        //extract $search from $request if present
        if($request->has('search')) {
            $search = $request->input('search');
        } else {
            $search = null;
        }

        return Revisione::getAggregatedAlertsList($search);
    }
}
