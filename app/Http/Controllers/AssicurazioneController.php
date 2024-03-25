<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Assicurazione;

class AssicurazioneController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\Assicurazione.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\Assicurazione::class;
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $validatedData = $this->model::validatePartial($request->all());

        return redirect()->route('create_veicolo')->with('success', 'Veicolo created successfully.');
    }





//    /**
//     * Display a listing of the resource.
//     */
//    public function index()
//    {
//        //
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     */
//    public function create()
//    {
//        //
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     */
//    public function store(StoreAssicurazioneRequest $request)
//    {
//        //
//    }
//
//    /**
//     * Display the specified resource.
//     */
//    public function show(Assicurazione $assicurazione)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     */
//    public function edit(Assicurazione $assicurazione)
//    {
//        //
//    }
//
//    /**
//     * Update the specified resource in storage.
//     */
//    public function update(UpdateAssicurazioneRequest $request, Assicurazione $assicurazione)
//    {
//        //
//    }
//
//    /**
//     * Remove the specified resource from storage.
//     */
//    public function destroy(Assicurazione $assicurazione)
//    {
//        //
//    }
}
