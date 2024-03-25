<?php

    namespace App\Models\Shared;

    use App\Models\Targa;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Support\Carbon;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Validator;
    use App\Models\Veicolo;

    class ImpostazioneModel extends BaseModel
    {
        protected static function commonSelect()
        {
            return ([static::getTableName().'.*']);
        }

        protected static function commonJoins($query)
        {
            return $query;
        }
    }

