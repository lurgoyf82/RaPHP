<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    class RaPHPController extends Controller {


        /**
         * Represents the default Model class name of the current Controller.
         *
         * @var string|bool $model
         */
        //Internal variable to store the model
        protected string|bool $model = false;
        /**
         * Construct a new instance of the class.
         *
         * @throws \Exception if the model is not set.
         */


        protected $relations = [];


        public function __construct() {
            //If the model is not set, throw an exception
            if ($this->model == null) {
                throw new \Exception('Model not set');
            }
        }


        /**
         * Get all records from the specified model.
         *
         * @return Illuminate\Database\Eloquent\Collection
         */
        public function getAll() {
            //returns in JSON format all the records from the model
            $data = $this->model::getAll();
            return response()->json($data);
        }

        /**
         * Get all records from the specified model.
         *
         * @return Illuminate\Database\Eloquent\Collection
         */
        public function indexOld() {
            //returns in JSON format all the records from the model
            $data = $this->model::all();
            return response()->json($data);
        }

        /**
         * Get all records from the specified model.
         *
         * @return Illuminate\Database\Eloquent\Collection
         */
        public function index() {
            //returns in JSON format all the records from the model
            $data = $this->model::all();
            return response()->json($data);
        }

        public function migrateThis() {
            //array containing the old field names as key and the new field names as value
            $aliases = [
                'id' => 'id',
                'id_proprietario' => 'id_proprietario',
                'id_tipo_veicolo' => 'id_tipo_veicolo',
                'id_tipo_allestimento' => 'id_tipo_allestimento',
                'id_marca' => 'id_marca',
                'id_modello' => 'id_modello',
                'tipo_asse' => 'id_tipo_asse',
                'tipo_cambio' => 'id_tipo_cambio',
                'alimentazione' => 'id_alimentazione',
                'destinazione_uso' => 'id_destinazione_uso'
            ];

            $skip = [
                'created_at',
                'updated_at',
                'altre_caratteristiche',
                'data_acquisto',
                'note_acquisto',
                'prezzo',
                'data_vendita',
                'controparte_vendita',
                'attiva'
            ];

            $tableName = (new $this->model)->getTable();

            //get all the data from the old table
            $rows = $this->model::all()->toArray();
            $text = null;
            foreach ($rows as $row) {
                if ($text != null) {
                    $text .= ",\n";
                }

                $text .= '[';
                $count = 0;

                foreach ($row as $fieldName => $fieldValue) {
                    if (in_array($fieldName, $skip)) {
                        continue;
                    }

                    if ($count > 0) {
                        $text .= ', ';
                    }

                    $count++;

                    if (array_key_exists($fieldName, $aliases)) {
                        $fieldName = $aliases[$fieldName];
                    }

                    switch ($fieldName) {
                        case 'created_at':
                        case 'updated_at':
                            $text .= "'" . addslashes($fieldName) . "' => NOW() ";
                            break;
                        default:
                            $text .= "'" . addslashes($fieldName) . "' => ";
                            if ($fieldValue == null) {
                                $text .= 'null ';
                            } else {
                                $text .= "'" . addslashes($fieldValue) . "' ";
                            }
                            break;
                    }

                }
                $text .= ']';
            }

            $text = 'DB::table(\'' . $tableName . '\')->insert([' . "\n" . $text . "\n" . ']);';

            return $text;

        }

        protected static function validateModel(Model $model): array {
            $fillables = $model->getFillable();
            $casts = $model->getCasts();
            $required = $model->getRequired();
            $validations = [];
            foreach ($fillables as $fillable) {
                if (!array_key_exists($fillable, $casts)) {
                    $validations[$fillable] = 'string';
                } else {
                    switch ($casts[$fillable]) {
                        case 'int':
                            $validations[$fillable] = 'integer';
                            break;
                        case 'float':
                            $validations[$fillable] = 'numeric';
                            break;
                        case 'bool':
                            $validations[$fillable] = 'boolean';
                            break;
                        case 'datetime':
                            $validations[$fillable] = 'date';
                            break;
                        default:
                            $validations[$fillable] = 'string';
                            break;
                    }
                }
                if (in_array($fillable, $required)) {
                    $validations[$fillable] .= '|required';
                }
            }
            return $validations;
        }

        protected static function getAllFieldsToValidate() {
            $models = self::listModels();
            $validations = [];

            foreach ($models as $model) {
                if($model == 'BaseModel' || $model == 'ImpostazioneModel') {
                    continue;
                }
                $model = app('App\Models\\' . $model);
                $fillables = $model->getFillable();
                $casts = $model->getCasts();
                foreach ($fillables as $fillable) {
                    if (!array_key_exists($fillable, $casts)) {
                        $validations[$fillable] = 'string';
                    } else {
                        switch ($casts[$fillable]) {
                            case 'int':
                                $validations[$fillable] = 'integer';
                                break;
                            case 'float':
                                $validations[$fillable] = 'numeric';
                                break;
                            case 'bool':
                                $validations[$fillable] = 'boolean';
                                break;
                            case 'datetime':
                                $validations[$fillable] = 'date';
                                break;
                            default:
                                $validations[$fillable] = 'string';
                                break;
                        }
                    }
                }
            }
            return $validations;
        }

        protected static function listModels(): array {
            // Use the File facade for filesystem operations
            $files = \Illuminate\Support\Facades\File::allFiles(app_path('Models'));
            $models = array_map(function ($file) {
                // Get the basename without the .php extension
                return basename($file->getFilename(), '.php');
            }, $files);

            return ($models);
        }

        public function getModel() {
            return $this->model;
        }


//    public function search(Request $request, $search = false, $searchField = false)
//    {
//        $result = $this->model::search($search, $searchField);
//        return response()->json($result);
//    }
//    public function index()
//    {
//        return app($this->model)->all();
//    }
//
//    public function create()
//    {
//        return view('create');
//    }
//
//    public function store(Request $request)
//    {
//        return app($this->model)->create($request->all());
//    }
//
//    public function show($id)
//    {
//        return app($this->model)->find($id);
//    }
//
//    public function edit($id)
//    {
//        return view('edit', ['model' => app($this->model)->find($id)]);
//    }
//
//    public function update(Request $request, $id)
//    {
//        return app($this->model)->find($id)->update($request->all());
//    }
//
//    public function destroy($id)
//    {
//        return app($this->model)->find($id)->delete();
//    }
//
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
//
//    public function exact_search($field, $exact_search)
//    {
//        return app($this->model)->where($field, $exact_search)->get();
//    }
//
//    public function field_search($field, $search)
//    {
//        return app($this->model)->where($field, 'LIKE', "%$search%")->get();
//    }
//
//    public function alert_show($id)
//    {
//        return app($this->model)->find($id);
//    }
//
//    public function alert_search($search)
//    {
//        return app($this->model)->where('name', 'LIKE', "%$search%")->get();
//    }
//
//    public function alert($livello = null)
//    {
//        if ($livello) {
//            return app($this->model)->where('livello', $livello)->get();
//        }
//        return app($this->model)->all();
//    }
//
//    public function alert_exact_search($field, $exact_search)
//    {
//        return app($this->model)->where($field, $exact_search)->get();
//    }

//    /**
//     * Migrate data from old table to new table using aliases and skips.
//     *
//     * @return string
//     */
//    public function migrateThis()
//    {
//        //array containing the old field names as key and the new field names as value
//        $aliases = [
//            'id' => 'id',
//            'id_proprietario' => 'id_proprietario',
//            'id_tipo_veicolo' => 'id_tipo_veicolo',
//            'id_tipo_allestimento' => 'id_tipo_allestimento',
//            'id_marca' => 'id_marca',
//            'id_modello' => 'id_modello',
//            'tipo_asse' => 'id_tipo_asse',
//            'tipo_cambio' => 'id_tipo_cambio',
//            'alimentazione' => 'id_alimentazione',
//            'destinazione_uso' => 'id_destinazione_uso'
//        ];
//
//        $skip = [
//            'created_at',
//            'updated_at',
//            'altre_caratteristiche',
//            'data_acquisto',
//            'note_acquisto',
//            'prezzo',
//            'data_vendita',
//            'controparte_vendita'
//        ];
//
//        $tableName = (new $this->model)->getTable();
//
//        //get all the data from the old table
//        $rows = $this->model::all()->toArray();
//        $text = null;
//        foreach ($rows as $row) {
//            if ($text != null) {
//                $text .= ",\n";
//            }
//
//            $text .= '[';
//            $count = 0;
//
//            foreach ($row as $fieldName => $fieldValue) {
//                if (in_array($fieldName, $skip)) {
//                    continue;
//                }
//
//                if ($count > 0) {
//                    $text .= ', ';
//                }
//
//                $count++;
//
//                if (array_key_exists($fieldName, $aliases)) {
//                    $fieldName = $aliases[$fieldName];
//                }
//
//                switch ($fieldName) {
//                    case 'created_at':
//                    case 'updated_at':
//                        $text .= "'" . addslashes($fieldName) . "' => NOW() ";
//                        break;
//                    default:
//                        $text .= "'" . addslashes($fieldName) . "' => ";
//                        if($fieldValue == null) {
//                            $text .= 'null ';
//                        } else {
//                            $text .= "'" . addslashes($fieldValue) . "' ";
//                        }
//                        break;
//                }
//
//            }
//            $text .= ']';
//        }
//
//        $text = 'DB::table(\'' . $tableName . '\')->insert(['."\n" . $text ."\n" .  ']);';
//
//        return $text;
//
//    }
    }
