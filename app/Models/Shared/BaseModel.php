<?php

    namespace App\Models\Shared;

    use App\Models\Targa;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Pagination\LengthAwarePaginator;
    use Illuminate\Support\Carbon;
    use Illuminate\Support\Facades\DB;
    use Illuminate\Support\Facades\Validator;
    use App\Models\Veicolo;

    class BaseModel extends Model
    {
        public static $itemsPerPage = 25;

        public static function getTableName(): string
        {
            return (new static)->table;
        }

        public static function scopeSearch($query, $search, $searchField = false)
        {
            switch ($searchField) {
                case 'id':
                    $query->where(static::getTableName() . '.id', '=', $search);
                    break;
                case 'id_veicolo':
                    $query->where('veicolo.id', '=', $search);
                    break;
                case 'targa':
                    $query->where('targa.targa', 'LIKE', "%{$search}%");
                    break;
                default:
                    $query = null;
                    break;
            }
            return $query;
        }



        public static function allWithRelationNames()
        {
            $query = static::query()->from(static::getTableName());
            return(static::commonJoins($query)->get(static::commonSelect()));
        }

        protected static function commonJoins($query)
        {
            $query=($query->leftJoin(Veicolo::getTableName(), Veicolo::getTableName().'.id', '=', static::getTableName().'.id_veicolo'));

            if(static::getTableName()!=Targa::getTableName()) {
                $query=($query->leftJoin(Targa::getTableName(), Veicolo::getTableName().'.id', '=', Targa::getTableName().'.id_veicolo'));
            }

            return $query;
        }

        protected static function commonWheres($query, $search)
        {
            return ($query->orWhere('veicolo.id', '=', $search)
                ->orWhere('veicolo.colore', 'LIKE', "%{$search}%")
                ->orWhere('veicolo.massa', 'LIKE', "%{$search}%")
                ->orWhere('veicolo.portata', 'LIKE', "%{$search}%")
                ->orWhere('veicolo.cilindrata', 'LIKE', "%{$search}%")
                ->orWhere('veicolo.potenza', 'LIKE', "%{$search}%")
                ->orWhere('veicolo.numero_assi', 'LIKE', "%{$search}%")
                ->orWhere('impostazione_proprietario_veicolo.nome', 'LIKE', "%{$search}%")
                ->orWhere('impostazione_tipo_veicolo.nome', 'LIKE', "%{$search}%")
                ->orWhere('impostazione_allestimento_veicolo.nome', 'LIKE', "%{$search}%")
                ->orWhere('impostazione_marca_veicolo.nome', 'LIKE', "%{$search}%")
                ->orWhere(Modello::getTableName().'nome', 'LIKE', "%{$search}%")
                ->orWhere('destinazione_uso.nome', 'LIKE', "%{$search}%")
                ->orWhere('tipo_cambio.nome', 'LIKE', "%{$search}%")
                ->orWhere('tipo_asse.nome', 'LIKE', "%{$search}%")
                ->orWhere('tipo_alimentazione.nome', 'LIKE', "%{$search}%")
                ->orWhere('targa.targa', 'LIKE', "%{$search}%"));
        }

        protected static function commonSelect()
        {
            return ([Veicolo::getTableName().'.*',
                static::getTableName().'.*'
                ,'targa.targa as targa'
            ]);

            return (['veicolo.id as veicolo_id',
                'veicolo.colore as veicolo_colore',
                'veicolo.massa as veicolo_massa',
                'veicolo.portata as veicolo_portata',
                'veicolo.cilindrata as veicolo_cilindrata',
                'veicolo.potenza as veicolo_potenza',
                'veicolo.numero_assi as veicolo_numero_assi',
                'impostazione_proprietario_veicolo.nome as proprietario_nome',
                'impostazione_tipo_veicolo.nome as tipo_veicolo_nome',
                'impostazione_allestimento_veicolo.nome as tipo_allestimento_nome',
                'impostazione_marca_veicolo.nome as marca_nome',
                'impostazione_modello_veicolo.nome as modello_nome',
                'impostazione_destinazione_veicolo.nome as destinazione_uso_nome',
                'impostazione_cambio_veicolo.nome as tipo_cambio_nome',
                'impostazione_asse_veicolo.nome as tipo_asse_nome',
                'impostazione_alimentazione_veicolo.nome as tipo_alimentazione_nome'
                //,'targa.targa as veicolo_targa'
                ]);
        }

        public static function validatePartial(array $data)
        {
            $rules = static::validationRules();

            $applicableRules = [];

            foreach ($data as $key => $value) {
                if (array_key_exists($key, $rules)) {
                    $applicableRules[$key] = $rules[$key];
                }
            }

            //return Validator::make($data, $applicableRules, static::validationMessages())->validate();
            return Validator::make($data, $applicableRules, static::validationMessages());
        }

        public static function validationRules(): array
        {
            //$targa = ['required', 'regex:/^[A-Za-z]{2}\s?\d{3}\s?[A-Za-z]{2}$/', 'unique:targa,targa'];

            $id_veicolo = 'required|exists:veicolo,id';
            $targa = ['required', 'regex:/^[A-Z0-9]{5,10}$/i', 'unique:targa,targa'];
            $data_immatricolazione = 'required|date_format:d-m-Y';
            $id_proprietario = 'required|exists:impostazione_proprietario_veicolo,id';
            $id_tipo_veicolo = 'required|exists:impostazione_tipo_veicolo,id';
            $id_tipo_allestimento = 'required|exists:impostazione_allestimento_veicolo,id';
            $id_marca = 'required|exists:impostazione_marca_veicolo,id';
            $id_modello = 'required|exists:impostazione_modello_veicolo,id';
            $id_numero_assi = 'required|integer|min:1|max:4';
            $id_tipo_asse = 'required|exists:impostazione_asse_veicolo,id';
            $id_tipo_cambio = 'required|exists:impostazione_cambio_veicolo,id';
            $id_tipo_alimentazione = 'required|exists:impostazione_alimentazione_veicolo,id';
            $id_destinazione_uso = 'required|exists:impostazione_destinazione_veicolo,id';
            $destinazione_uso = 'nullable|exists:impostazione_destinazione_veicolo,id';
            $colore = 'nullable|string|max:256';
            $lunghezza_esterna = 'nullable|numeric|min:0';
            $larghezza_esterna = 'nullable|numeric|min:0';
            $massa = 'nullable|numeric|min:0';
            $portata = 'nullable|numeric|min:0';
            $cilindrata = 'nullable|numeric|min:0';
            $potenza = 'nullable|numeric|min:0';
            $numero_assi = 'nullable|integer|min:0';
            $tipo_asse = 'nullable|exists:tipo_asse,id';
            $tipo_cambio = 'nullable|exists:tipo_cambio,id';
            $alimentazione = 'nullable|exists:tipo_alimentazione,id';
            $anno = 'required|date_format:Y';
            $data_pagamento = 'required|date_format:Y-m-d';
            $inizio_validita = 'required|date_format:Y-m-d';
            $fine_validita = 'required|date_format:Y-m-d|after_or_equal:inizio_validita';
            $importo = 'required|numeric|min:0';
            $agenzia = 'required|string|max:255';
            $polizza = 'required|string|max:255';
            $tipo_scadenza = 'required|in:Quadrimestrale,Semestrale,Annuale';

            return compact('targa', 'data_immatricolazione', 'id_proprietario', 'id_tipo_veicolo', 'id_tipo_allestimento',
                'id_marca', 'id_modello', 'id_numero_assi', 'id_tipo_asse', 'id_tipo_cambio', 'id_tipo_alimentazione', 'id_destinazione_uso',
                'colore', 'lunghezza_esterna', 'larghezza_esterna', 'massa', 'portata', 'cilindrata', 'potenza', 'numero_assi', 'tipo_asse',
                'tipo_cambio', 'alimentazione', 'destinazione_uso', 'anno', 'data_pagamento', 'inizio_validita', 'fine_validita', 'importo',
                'agenzia', 'polizza', 'tipo_scadenza', 'id_veicolo');
        }

        public static function validationMessages(): array
        {
            $targa = 'Inserire la targa (Controllare non sia già stata inserita)';
            $data_immatricolazione = 'Inserisci la data di immatricolazione';
            $id_numero_assi = 'Scegliere un numero assi';
            $id_tipo_asse = 'Scegliere un tipo asse';
            $id_tipo_cambio = 'Scegliere un tipo cambio';
            $id_tipo_alimentazione = 'Scegliere un tipo alimentazione';
            $id_destinazione_uso = 'Scegliere una destinazione uso';
            $id_proprietario = 'Il proprietario selezionato per "dettaglio veicolo" non è valido';
            $id_tipo_veicolo = 'Il tipo di veicolo selezionato per "dettaglio veicolo" non è valido';
            $id_tipo_allestimento = 'Il tipo di allestimento selezionato per "dettaglio veicolo" non è valido';
            $id_marca = 'La marca selezionata per "dettaglio veicolo" non è valida';
            $id_modello = 'Il modello selezionato per "dettaglio veicolo" non è valido';
            $colore = 'Il colore per "dettaglio veicolo" non è valido';
            $lunghezza_esterna = 'La lunghezza esterna per "dettaglio veicolo" non è valida';
            $larghezza_esterna = 'La larghezza esterna per "dettaglio veicolo" non è valida';
            $massa = 'La massa per "dettaglio veicolo" non è valida';
            $portata = 'La portata per "dettaglio veicolo" non è valida';
            $cilindrata = 'La cilindrata per "dettaglio veicolo" non è valida';
            $potenza = 'La potenza per "dettaglio veicolo" non è valida';
            $numero_assi = 'Il numero di assi per "dettaglio veicolo" non è valido';
            $tipo_asse = 'Il tipo di asse selezionato per "dettaglio veicolo" non è valido';
            $tipo_cambio = 'Il tipo di cambio selezionato per "dettaglio veicolo" non è valido';
            $alimentazione = 'Il tipo di alimentazione selezionato per "dettaglio veicolo" non è valido';
            $destinazione_uso = 'La destinazione d\'uso selezionata per "dettaglio veicolo" non è valida';
            $id_veicolo = 'Il veicolo selezionato per "assicurazione" non è valido';
            $anno = 'L\'anno specificato per "assicurazione" non è valido';
            $data_pagamento = 'La data di pagamento per "assicurazione" non è valida';
            $inizio_validita = 'La data di inizio validità per "assicurazione" non è valida';
            $fine_validita = 'La data di fine validità per "assicurazione" non è valida o è precedente alla data di inizio validità';
            $importo = 'L\'importo per "assicurazione" non è valido o è negativo';
            $agenzia = 'L\'agenzia per "assicurazione" non è valida';
            $polizza = 'La polizza per "assicurazione" non è valida';
            $tipo_scadenza = 'Il tipo di scadenza per "assicurazione" non è valido o non è tra le opzioni consentite';

            //----------------------------------------------------------------------------------------------------------------

            //$id_gps = 'Il GPS selezionato per "assegnamento_gps" non è valido';
            //$assegnato_da = 'La data di assegnazione non è valida';
            //$assegnato_a = 'La data di fine assegnazione non è valida o è precedente alla data di inizio assegnazione';
            //$targa = 'La targa per "assicurazione" non è valida';
            //$anno = 'L\'anno specificato per "assicurazione" non è valido';
            //$data_pagamento = 'La data di pagamento per "assicurazione" non è valida';
            //$inizio_validita = 'La data di inizio validità per "assicurazione" non è valida';
            //$fine_validita = 'La data di fine validità per "assicurazione" non è valida o è precedente alla data di inizio validità';
            //$importo = 'L\'importo per "assicurazione" non è valido o è negativo';
            //$agenzia = 'L\'agenzia per "assicurazione" non è valida';
            //$polizza = 'La polizza per "assicurazione" non è valida';
            //$tipo_scadenza = 'Il tipo di scadenza per "assicurazione" non è valido o non è tra le opzioni consentite';
            //$targa = 'La targa per "tagliando" non è valida';
            //$anno = 'L\'anno specificato per "tagliando" non è valido';
            //$data_pagamento = 'La data di pagamento per "tagliando" non è valida';
            //$inizio_validita = 'La data di inizio validità per "tagliando" non è valida';
            //$fine_validita = 'La data di fine validità per "tagliando" non è valida o è precedente alla data di inizio validità';
            //$importo = 'L\'importo per "tagliando" non è valido o è negativo';
            //$agenzia = 'L\'agenzia per "tagliando" non è valida';
            //$polizza = 'La polizza per "tagliando" non è valida';
            //$tipo_scadenza = 'Il tipo di scadenza per "tagliando" non è valido o non è tra le opzioni consentite';
            //$anno = 'L\'anno specificato per "Cronotachigrafo" non è valido';
            //$data_pagamento = 'La data di pagamento per "Cronotachigrafo" non è valida';
            //$inizio_validita = 'La data di inizio validità per "Cronotachigrafo" non è valida';
            //$fine_validita = 'La data di fine validità per "Cronotachigrafo" non è valida o è precedente alla data di inizio validità';
            //$importo = 'L\'importo per "Cronotachigrafo" non è valido o è negativo';
            //$anno = 'L\'anno specificato per "revisione" non è valido';
            //$data_pagamento = 'La data di pagamento per "revisione" non è valida';
            //$inizio_validita = 'La data di inizio validità per "revisione" non è valida';
            //$fine_validita = 'La data di fine validità per "revisione" non è valida o è precedente alla data di inizio validità';
            //$importo = 'L\'importo per "revisione" non è valido o è negativo';
            //$agenzia = 'L\'agenzia per "revisione" non è valida';
            //$polizza = 'La polizza per "revisione" non è valida';
            //$tipo_scadenza = 'Il tipo di scadenza per "revisione" non è valido o non è tra le opzioni consentite';
            //$anno = 'L\' Anno non è valido';
            //$data_pagamento = ' non è valido';
            //$inizio_validita = ' non è valido';
            //$fine_validita = ' non è valido';
            //$importo = ' non è valido';
            ////$agenzia = ' non è valido';
            ////$polizza = ' non è valido';
            ////$tipo_scadenza = ' non è valido';
            //$nome = 'Il nome del modello non è valido o mancante';
            //$id_marca = 'La marca selezionata per il modello non è valida';
            //$nome = 'Il nome della marca non è valido o mancante';
            //$numero_imei = 'Il numero IMEI del GPS è obbligatorio e deve essere una stringa valida';
            //$seriale = 'Il numero di serie del GPS deve essere una stringa valida';
            //$modello = 'Il modello del GPS deve essere una stringa valida';
            //$costruttore = 'Il costruttore del GPS deve essere una stringa valida';
            //$data_assegnazione = 'La data di assegnazione del GPS non è valida';
            //$data_rimozione = 'La data di rimozione del GPS non è valida o è precedente alla data di assegnazione';
            //$data_acquisto = 'La data di acquisto del GPS non è valida';
            //$stato = 'Lo stato del GPS non è valido o non è tra le opzioni consentite (attivo, inattivo, in mantenimento)';
            //$note = 'Le note per il GPS devono essere una stringa valida';
            //$id_veicolo = 'Il veicolo selezionato per "bombole" non è valido';
            //$anno = 'L\'anno specificato per "bombole" non è valido';
            //$data_pagamento = 'La data di pagamento per "bombole" non è valida';
            //$inizio_validita = 'La data di inizio validità per "bombole" non è valida';
            //$fine_validita = 'La data di fine validità per "bombole" non è valida o è precedente alla data di inizio validità';
            //$importo = 'L\'importo per "bombole" non è valido o è negativo';
            //$id_veicolo = 'Il veicolo selezionato per "bollo" non è valido';
            //$anno = 'L\'anno specificato per "bollo" non è valido';
            //$data_pagamento = 'La data di pagamento per "bollo" non è valida';
            //$inizio_validita = 'La data di inizio validità per "bollo" non è valida';
            //$fine_validita = 'La data di fine validità per "bollo" non è valida o è precedente alla data di inizio validità';
            //$importo = 'L\'importo per "bollo" non è valido o è negativo';
            //$id_veicolo = 'Il veicolo selezionato per "Atp" non è valido';
            //$anno = 'L\'anno specificato per "Atp" non è valido';
            //$data_pagamento = 'La data di pagamento per "Atp" non è valida';
            //$inizio_validita = 'La data di inizio validità per "Atp" non è valida';
            //$fine_validita = 'La data di fine validità per "Atp" non è valida o è precedente alla data di inizio validità';
            //$importo = 'L\'importo per "Atp" non è valido o è negativo';

            return compact('targa', 'data_immatricolazione', 'id_proprietario', 'id_tipo_veicolo', 'id_tipo_allestimento',
                'id_marca', 'id_modello', 'id_numero_assi', 'id_tipo_asse', 'id_tipo_cambio', 'id_tipo_alimentazione', 'id_destinazione_uso',
                'colore', 'lunghezza_esterna', 'larghezza_esterna', 'massa', 'portata', 'cilindrata', 'potenza', 'numero_assi', 'tipo_asse',
                'tipo_cambio', 'alimentazione', 'destinazione_uso', 'anno', 'data_pagamento', 'inizio_validita', 'fine_validita', 'importo',
                'agenzia', 'polizza', 'tipo_scadenza', 'id_veicolo');
        }

        public static function resultToPagination($result, $page = 1, $slice = true)
        {
            $page = intval($page);
            if ($page <= 0 || !is_int($page)) {
                $page = 1;
            }

            // Manually slice the results for pagination
            $offset = ($page - 1) * AlertBase::$itemsPerPage;
            if ($slice) {
                $itemsForCurrentPage = $result->slice($offset, AlertBase::$itemsPerPage);
            } else {
                $itemsForCurrentPage = $result;
            }

            return new LengthAwarePaginator(
                $itemsForCurrentPage,
                $result->count(),
                AlertBase::$itemsPerPage,
                $page,
                ['path' => LengthAwarePaginator::resolveCurrentPath()]
            );
        }

        public static function setOrder($order)
        {
            $order = explode('_', $order);

            switch (strtolower($order[0])) {
                case 'marca':
                    $orderBy = Marca::getTableName() . '.nome';
                    break;
                case 'modello':
                    $orderBy = Modello::getTableName() . '.nome';
                    break;
                case 'targa':
                    $orderBy = Targa::getTableName() . '.targa';
                    break;
                default:
                    $orderBy = 'livello';
                    break;
            }

            if (array_key_exists(1, $order,) && strtolower($order[1]) == 'desc') {
                $orderDirection = 'DESC';
            } else {
                $orderDirection = 'ASC';
            }

            return compact('orderBy', 'orderDirection', 'order');
        }

        public static function getFilteredVehicles($search = null, $page = 1, $orderBy = 'livello', $orderDirection = 'ASC')
        {
            $query = DB::table(Veicolo::getTableName())
                ->leftJoin(Marca::getTableName(), Veicolo::getTableName() . '.id_marca', '=', Marca::getTableName() . '.id')
                ->leftJoin(Modello::getTableName(), function ($join) {
                    $join->on(Veicolo::getTableName() . '.id_modello', '=', Modello::getTableName() . '.id')
                        ->on(Modello::getTableName() . '.id_marca', '=', Marca::getTableName() . '.id');
                })
                ->leftJoin(Targa::getTableName(), Targa::getTableName() . '.id_veicolo', '=', Veicolo::getTableName() . '.id')
                ->select([
                    Marca::getTableName() . '.id as id_marca',
                    Marca::getTableName() . '.nome as marca',
                    Modello::getTableName() . '.id as id_modello',
                    Modello::getTableName() . '.nome as modello',
                    Veicolo::getTableName() . '.id as id_veicolo'
                ]);

            if ($search !== null) {
                $query->where(function ($query) use ($search) {
                    $query->where(Targa::getTableName() . '.targa', 'LIKE', '%' . $search . '%')
                        ->orWhere(Marca::getTableName() . '.nome', 'LIKE', '%' . $search . '%')
                        ->orWhere(Modello::getTableName() . '.nome', 'LIKE', '%' . $search . '%');
                });
            }

            //$query->offset(($page - 1) * AlertBase::$itemsPerPage)->limit(AlertBase::$itemsPerPage);

            if ($orderBy !== 'livello') {
                $result = $query->orderBy($orderBy, $orderDirection)->get();
            } else {
                $result = $query->orderBy(Veicolo::getTableName() . '.id', 'ASC')->get();
            }

            return $result;
        }

        public static function getAggregatedAlertsList($search = null, $order = 'livello', $page = 1, $slice = true): LengthAwarePaginator
        {
            //Checks the order
            $order = static::setOrder($order);
            $orderBy = $order['orderBy'];
            $orderDirection = $order['orderDirection'];

            //Get all the vehicles considering the search
            $result = static::getFilteredVehicles($search, $page, $orderBy, $orderDirection);

            $result = static::updateVehiclesWithCurrentValidContracts($result);
            //$result=static::updateVehiclesWithNextValidContract($result);
            //$result=static::updateVehiclesWithExpiredContract($result);

            if ($orderBy == 'livello') {
                if ($orderDirection == 'DESC') {
                    $result = ($result->sortByDesc('livello'));
                } else {
                    $result = ($result->sortBy('livello'));
                }
            }

            return static::resultToPagination($result, $page, $slice);
        }

        private static function updateVehiclesWithCurrentValidContracts($result)
        {
            $valid = static::getCurrentValidList();

            foreach ($result as $key => $vehicle) {
                $vehicle->id = null;
                $vehicle->livello = null;
                $vehicle->next = null;
                $vehicle->expired = null;
                $vehicle->id_current = null;
                $vehicle->id_next = null;
                $vehicle->id_expired = null;


                if (@isset($valid[$vehicle->id_veicolo])) {
                    $vehicle->valid = $valid[$vehicle->id_veicolo];
                    foreach ($valid[$vehicle->id_veicolo] as $currentValid) {
                        //$livello = Carbon::parse($currentValid->current_valid_fine_validita)->diffInDays(Carbon::now());
                        $livello = Carbon::parse($currentValid->current_valid_fine_validita)->addDay()->diffInDays(Carbon::now()) + 1;

                        if ($livello > $vehicle->livello || $vehicle->livello === null) {
                            $vehicle->livello = $livello;
                            $vehicle->inizio_validita = $currentValid->current_valid_inizio_validita;
                            $vehicle->fine_validita = $currentValid->current_valid_fine_validita;
                            $vehicle->id = $currentValid->current_valid_id;
                            $vehicle->id_current = $currentValid->current_valid_id;
                        }
                    }
                } else {
                    $vehicle->valid = false;
                }
            }
            //dd($result);
            return $result;
        }

        private static function updateVehiclesWithNextValidContract($result)
        {
            $startingNext = static::getStartingNextList();

            foreach ($result as $key => $vehicle) {

                if (@isset($startingNext[$vehicle->id_veicolo])) {
                    $vehicle->startingNext = $startingNext[$vehicle->id_veicolo];
                    foreach ($startingNext[$vehicle->id_veicolo] as $nextValid) {
                        $next = Carbon::parse($nextValid->next_inizio_validita)->addDay()->diffInDays(Carbon::now());

                        if ($next > $vehicle->next) {
                            $vehicle->next = $next;
                            $vehicle->next_inizio_validita = $nextValid->next_inizio_validita;
                            $vehicle->next_fine_validita = $nextValid->next_fine_validita;
                            $vehicle->id_next = $nextValid->next_id;
                        }
                    }
                } else {
                    $vehicle->startingNext = false;
                }
            }

            return $result;
        }

        private static function updateVehiclesWithExpiredContract($result)
        {
            $expired = static::getExpiredList();

            foreach ($result as $key => $vehicle) {
                if (@isset($expired[$vehicle->id_veicolo])) {
                    $vehicle->expired = $expired[$vehicle->id_veicolo];
                    if ($vehicle->livello === null) {
                        foreach ($vehicle->expired as $expired) {
                            $livello = -(Carbon::now()->diffInDays($expired->expired_fine_validita));
                            var_dump($livello, $vehicle, $expired);
                            if ($livello > $vehicle->livello) {
                                $vehicle->livello = $livello;
                                $vehicle->inizio_validita = $expired->expired_inizio_validita;
                                $vehicle->fine_validita = $expired->expired_fine_validita;
                                $vehicle->id = $expired->expired_id;
                            }
                        }
                    }

                } else {
                    $vehicle->expired = false;
                }
            }

            return $result;
        }

        /*
                public static function getAggregatedAlerts($search=null,$order='livello',$page=1,$slice=true): LengthAwarePaginator
                {
                    $valid = static::getCurrentValidList();
                    $expired = static::getExpiredList();
                    $startingNext = static::getStartingNextList();

                    $page = intval($page);
                    if ($page <= 0 || !is_int($page)) {
                        $page = 1;
                    }

                    $order=explode('_',$order);

                    switch (strtolower($order[0])) {
                        case 'marca':
                            $orderBy = 'impostazione_marca_veicolo.nome';
                            break;
                        case 'modello':
                            $orderBy = Modello::getTableName().'nome';
                            break;
                        case 'targa':
                            $orderBy = 'targa.targa';
                            break;
                        default:
                            $orderBy = 'livello';
                            break;
                    }

                    if(array_key_exists(1,$order,)&&strtolower($order[1])=='desc') {
                        $orderDirection='DESC';
                    } else {
                        $orderDirection='ASC';
                    }

                    $query = DB::table(Veicolo::getTableName())
                        ->leftJoin(Marca::getTableName(), Veicolo::getTableName() . '.id_marca', '=', Marca::getTableName() . '.id')
                        ->leftJoin(Modello::getTableName(), function ($join) {
                            $join->on(Veicolo::getTableName() . '.id_modello', '=', Modello::getTableName() . '.id')
                                ->on(Modello::getTableName() . '.id_marca', '=', Marca::getTableName() . '.id');
                        })
                        ->leftJoin(Targa::getTableName(), Targa::getTableName() . '.id_veicolo', '=', Veicolo::getTableName() . '.id')
                        ->select([
                            Marca::getTableName() . '.id as id_marca',
                            Marca::getTableName() . '.nome as marca',
                            Modello::getTableName() . '.id as id_modello',
                            Modello::getTableName() . '.nome as modello',
                            Veicolo::getTableName() . '.id as id_veicolo'
                        ]);

                    if ($search !== null) {
                        $query->where(function ($query) use ($search) {
                            $query->where('targa.targa', 'LIKE', '%' . $search . '%')
                                ->orWhere('impostazione_marca_veicolo.nome', 'LIKE', '%' . $search . '%')
                                ->orWhere(Modello::getTableName().'nome', 'LIKE', '%' . $search . '%');
                        });
                    }

                    //$query->offset(($page - 1) * AlertBase::$itemsPerPage)->limit(AlertBase::$itemsPerPage);

                    if ($orderBy!=='livello') {
                        $result = $query->orderBy($orderBy, $orderDirection)->get();
                    } else {
                        $result = $query->orderBy(Veicolo::getTableName() . '.id', 'ASC')->get();
                    }

                    foreach($result as $key => $vehicle) {
                        $vehicle->livello = null;
                        $vehicle->next = null;
                        $vehicle->id = null;

                        if(@isset($valid[$vehicle->id_veicolo])) {
                            $vehicle->valid = $valid[$vehicle->id_veicolo];
                            foreach ($vehicle->valid as $contract) {
                                $livello = Carbon::parse($contract->current_valid_fine_validita)->diffInDays(Carbon::now());
                                if($livello>$vehicle->livello) {
                                    $vehicle->livello = $livello;
                                    $vehicle->inizio_validita = $contract->current_valid_inizio_validita;
                                    $vehicle->fine_validita = $contract->current_valid_fine_validita;
                                    $vehicle->id = $contract->current_valid_id;
                                }
                            }
                        } else {
                            $vehicle->valid = false;
                        }

                        if(@isset($startingNext[$vehicle->id_veicolo])) {
                            $vehicle->startingNext = $startingNext[$vehicle->id_veicolo];
                            foreach ($vehicle->startingNext as $contract) {
                                $next = Carbon::parse($contract->next_inizio_validita)->diffInDays(Carbon::now());
                                if($next<$vehicle->next) {
                                    $vehicle->next = $next;
                                    $vehicle->inizio_validita = $contract->next_inizio_validita;
                                    $vehicle->fine_validita = $contract->next_fine_validita;
                                    $vehicle->id = $contract->next_id;
                                }
                            }
                        } else {
                            $vehicle->startingNext = false;
                        }

                        if(@isset($expired[$vehicle->id_veicolo])) {
                            $vehicle->expired = $expired[$vehicle->id_veicolo];
                            if($vehicle->livello===null) {
                                foreach ($vehicle->expired as $contract) {
                                    $livello = -(Carbon::now()->diffInDays($contract->expired_fine_validita));
                                    if($livello>$vehicle->livello) {
                                        $vehicle->livello = $livello;
                                        $vehicle->inizio_validita = $contract->expired_inizio_validita;
                                        $vehicle->fine_validita = $contract->expired_fine_validita;
                                        $vehicle->id = $contract->expired_id;
                                    }
                                }
                            }
                        } else {
                            $vehicle->expired = false;
                        }

                        if($vehicle->livello > Alert::$thirdThreshold) {
                            unset($result[$key]);
                        }
                    }

                    if ($orderBy=='livello') {
                        if($orderDirection=='DESC') {
                            $result=($result->sortByDesc('livello'));
                        } else {
                            $result=($result->sortBy('livello'));
                        }
                    }

        //		foreach($result as $row) {
        //			if($row->id===1456) {
        //				var_dump($row);
        //				die();
        //			}
        //		}

                    // Manually slice the results for pagination
                    $offset = ($page - 1) * AlertBase::$itemsPerPage;
                    if($slice) {
                        $itemsForCurrentPage = $result->slice($offset, AlertBase::$itemsPerPage);
                    } else {
                        $itemsForCurrentPage = $result;
                    }

                    return new LengthAwarePaginator(
                        $itemsForCurrentPage,
                        $result->count(),
                        AlertBase::$itemsPerPage,
                        $page,
                        ['path' => LengthAwarePaginator::resolveCurrentPath()]
                    );
                }
        */
        public static function getFilteredVehiclesNew(Request $request)
        {
            $search = $request->input('search', null);
            $order = $request->input('order', 'livello');
            $page = $request->input('page', 1);  // default to 1 if not provided

            $order = static::setOrder($order);
            $orderBy = $order['orderBy'];
            $orderDirection = $order['orderDirection'];

            $query = DB::table(Veicolo::getTableName())
                ->leftJoin(Marca::getTableName(), Veicolo::getTableName() . '.id_marca', '=', Marca::getTableName() . '.id')
                ->leftJoin(Modello::getTableName(), function ($join) {
                    $join->on(Veicolo::getTableName() . '.id_modello', '=', Modello::getTableName() . '.id')
                        ->on(Modello::getTableName() . '.id_marca', '=', Marca::getTableName() . '.id');
                })
                ->leftJoin(Targa::getTableName(), Targa::getTableName() . '.id_veicolo', '=', Veicolo::getTableName() . '.id')
                ->select([
                    Marca::getTableName() . '.id as id_marca',
                    Marca::getTableName() . '.nome as marca',
                    Modello::getTableName() . '.id as id_modello',
                    Modello::getTableName() . '.nome as modello',
                    Veicolo::getTableName() . '.id as id_veicolo'
                ]);

            if ($search !== null) {
                $query->where(function ($query) use ($search) {
                    $query->where(Targa::getTableName() . '.targa', 'LIKE', '%' . $search . '%')
                        ->orWhere(Marca::getTableName() . '.nome', 'LIKE', '%' . $search . '%')
                        ->orWhere(Modello::getTableName() . '.nome', 'LIKE', '%' . $search . '%');
                });
            }

            //$query->offset(($page - 1) * AlertBase::$itemsPerPage)->limit(AlertBase::$itemsPerPage);

            if ($orderBy !== 'livello') {
                $result = $query->orderBy($orderBy, $orderDirection)->get();
            } else {
                $result = $query->orderBy(Veicolo::getTableName() . '.id', 'ASC')->get();
            }

            return $result;
        }

        public function getCasts() {
            return $this->casts;
        }

        public function getFillables() {
            return $this->fillable;
        }

    }

