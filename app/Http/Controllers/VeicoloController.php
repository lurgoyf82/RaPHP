<?php

    namespace App\Http\Controllers;

    use App\Models\Veicolo;
    use Illuminate\Http\Request;
    use Illuminate\Support\{Arr, Facades\Http, Facades\Route};

    class VeicoloController extends RaPHPController {
        /**
         * Constructor method.
         *
         * Initializes the __construct object with the model class \App\Models\Veicolo.
         *
         * @return void
         */
        public function __construct() {
            $this->model = \App\Models\Veicolo::class;
        }

        public function getModel() {
            return $this->model;
        }


        /**
         * Store a newly created resource in storage.
         */
        public function store(Request $request) {
            $validator = $this->model::validatePartial($request->all());
            //$validator = Veicolo::validatePartial($request->all());

            if ($validator->fails()) {
                // Handle the failure case, e.g., return a custom response or log the error
                $errors = $validator->errors();
                // Do something with the errors, like returning them or logging
                //dd($errors,$validator->failed());

                return response()->json([
                    'message' => 'Validation failed',
                    'errors' => $errors,
                    'failed' => $validator->failed(),
                    'data' => $request->all()
                ], 400); // 400 is the status code for "Bad Request"
            } else {
                // If validation passes, you can access the validated data
                $validatedData = $validator->validated();
                if(array_key_exists('data_immatricolazione', $validatedData)) {
                    $validatedData['data_immatricolazione'] = \Carbon\Carbon::createFromFormat('d-m-Y', $validatedData['data_immatricolazione'])->format('Y-m-d');
                }
                dd($validatedData,$request->all());
            }



            // Remove 'targa' from $validatedData and create Veicolo
            $veicoloData = Arr::except($validatedData, ['targa', 'data_immatricolazione']);
            $veicolo = Veicolo::create($veicoloData);

            // Now create Targa with the veicolo ID and the targa value
            $targaData = [
                'id_veicolo' => $veicolo->id, // Use the ID of the Veicolo you just created
                'targa' => strtoupper($validatedData['targa']), // Get the targa value from the original data
                'data_immatricolazione' => $validatedData['data_immatricolazione'] // Set the data_immatricolazione to today's date
            ];

            //checks if another targa exists with the same value
            if (\App\Models\Targa::where('targa', $targaData['targa'])->exists()) {
                return response()->json([
                    'message' => 'Targa is a duplicate',
                    'data' => $targaData
                ], 400); // 400 is the status code for "Bad Request"
            }

            \App\Models\Targa::create($targaData);


            //$query = $this->model::query()->from($this->model::getTableName());
            //
            //var_dump($query->toSql());
            //
            //$query = ($this->model::commonJoins($query)->find($veicolo->id));
            //
            //$query = $query->select($this->model::commonSelect())->$query;


            // Assuming $this->model is a valid Eloquent model class name
            // Start by getting the base query
            $query = $this->model::query()->from($this->model::getTableName());

            // Apply common joins
            $query = $this->model::commonJoins($query);

            // Select common columns. Ensure commonSelect returns an array of column names.
            $query = $query->select($this->model::commonSelect());

            // Find the specific record by ID
            $result = $query->find($veicolo->id);

            // Now $record should have the result, or null if not found


            //dd($query->toSql());

            // Example of a successful response with Laravel
            return response()->json([
                'message' => 'Resource created successfully',
                'data' => $result->toArray()
            ], 201); // 201 is the status code for "Created"


            //return redirect()->route('create_veicolo')->with('success', 'Veicolo created successfully.');
        }


        /**
         * Get all records from the specified model.
         *
         * @return Illuminate\Database\Eloquent\Collection
         */
        public function index() {
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
