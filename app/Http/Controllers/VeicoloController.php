<?php

namespace App\Http\Controllers;

use App\Models\Veicolo;
use Illuminate\Http\Request;
use Illuminate\Support\{Arr, Facades\Http, Facades\Route};

class VeicoloController extends RaPHPController
{
    /**
     * Constructor method.
     *
     * Initializes the __construct object with the model class \App\Models\Veicolo.
     *
     * @return void
     */
    public function __construct()
    {
        $this->model = \App\Models\Veicolo::class;
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    //dd($request->all());
        $validatedData = $this->model::validatePartial($request->all());

        // Remove 'targa' from $validatedData and create Veicolo
        $veicoloData = Arr::except($validatedData, ['targa', 'data_immatricolazione']);
        $veicolo = Veicolo::create($veicoloData);

        // Now create Targa with the veicolo ID and the targa value
        $targaData = [
            'id_veicolo' => $veicolo->id, // Use the ID of the Veicolo you just created
            'targa' => strtoupper($validatedData['targa']), // Get the targa value from the original data
            'data_immatricolazione' => $validatedData['data_immatricolazione'] // Set the data_immatricolazione to today's date
        ];

        \App\Models\Targa::create($targaData);


        //returns JSON successful insert message
        return response()->json(['message' => 'Veicolo created successfully.', 'ok' => true,
         'data' => $veicolo ,'status' => 200]);


        //return redirect()->route('create_veicolo')->with('success', 'Veicolo created successfully.');
    }


    /**
     * Get all records from the specified model.
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        //returns in JSON format all the records from the model
        $data = $this->model::allWithRelationNames();
        return response()->json($data);
    }

//    public function dashboard()
//    {
//        //
//    }
//    public function show($id)
//    {
//        //
//    }
//    public function search(Request $request)
//    {
//        $query = $request->input('query', '');
//        $field = $request->input('field', null);
//        $exact = $request->boolean('exact', false);
//        $fields = $request->input('fields', null);
//
//        // Use dynamic model binding
//        $modelQuery = app($this->model)->query();
//
//        if ($fields) {
//            $searchFields = array_map('trim', explode(',', $fields));
//            foreach ($searchFields as $searchField) {
//                $modelQuery = $modelQuery->orWhere($searchField, $exact ? '=' : 'LIKE', $exact ? $query : "%$query%");
//            }
//        } elseif ($field) {
//            $modelQuery = $modelQuery->where($field, $exact ? '=' : 'LIKE', $exact ? $query : "%$query%");
//        } else {
//            $modelQuery = $modelQuery->where(function ($q) use ($query) {
//                $q->where('name', 'LIKE', "%$query%")
//                    ->orWhere('license_plate', 'LIKE', "%$query%");
//                // Adjust these fields based on your model's searchable attributes
//            });
//        }
//
//        return $modelQuery->get();
//    }
//    public function exact_search($field, $exact_search)
//    {
//        //
//    }
//    public function field_search($field, $search)
//    {
//        //
//    }
//    public function alert_show($id)
//    {
//        //
//    }
//    public function alert_search($search)
//    {
//        //
//    }
//    public function alert_exact_search($field, $exact_search)
//    {
//        //
//    }
//    public function alert_field_search($field, $search)
//    {
//        //
//    }
//    public function index()
//    {
//        //
//    }
//    public function create()
//    {
//        //
//    }
//    public function store(StoreVeicoloRequest $request)
//    {
//        //
//    }
//    public function edit($id)
//    {
//        //
//    }
//    public function update(UpdateVeicoloRequest $request, $id)
//    {
//        //
//    }
//    /**
//     * Show the prompt for editing the specified resource.
//     */
//    public function delete($id) {
//
//    }
//    /**
//     * Remove the specified resource from storage.
//     */
//    public function destroy(Veicolo $veicolo)
//    {
//        //
//    }
}
