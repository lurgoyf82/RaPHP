<?php
namespace App\Models\Traits;

use Illuminate\Support\Facades\Validator;

trait Validatable
{

    /**
     * Validate a partial array of data against the validation rules defined in the model.
     *
     * @param array $data The partial array of data to validate.
     *
     * @return \Illuminate\Validation\Validator The validator instance for further validation or error handling.
     */
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

    /**
     * Returns an array of validation rules for the specified method.
     *
     * @return array The array of validation rules.
     */
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
        $data_pagamento = 'required|date_format:d-m-Y';
        $inizio_validita = 'required|date_format:d-m-Y';
        $fine_validita = 'required|date_format:d-m-Y|after_or_equal:inizio_validita';
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

    /**
     * Returns an array of validation error messages.
     *
     * @return array The validation error messages.
     */
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

}
