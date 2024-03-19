<?php

    namespace App\Http\Requests;

    use Illuminate\Foundation\Http\FormRequest;
    use Illuminate\Support\Facades\Auth;

    class UpdateVeicoloRequest extends FormRequest
    {
        /**
         * Determine if the user is authorized to make this request.
         */
        public function authorize(): bool
        {
            return Auth::user()->hasPermissionTo('update_veicolo');
        }

        /**
         * Get the validation rules that apply to the request.
         *
         * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
         */
        public function rules(): array
        {
            return [
                'id_proprietario' => 'nullable|exists:impostazione_proprietario_veicolo,id',
                'id_tipo_veicolo' => 'nullable|exists:impostazione_tipo_veicolo,id',
                'id_tipo_allestimento' => 'nullable|exists:impostazione_allestimento_veicolo,id',
                'id_marca' => 'nullable|exists:impostazione_marca_veicolo,id',
                'id_modello' => 'nullable|exists:impostazione_modello_veicolo,id',
                'id_tipo_asse' => 'nullable|exists:impostazione_asse_veicolo,id',
                'id_tipo_cambio' => 'nullable|exists:impostazione_cambio_veicolo,id',
                'id_alimentazione' => 'nullable|exists:impostazione_alimentazione_veicolo,id',
                'id_destinazione_uso' => 'nullable|exists:impostazione_destinazione_veicolo,id',
                'colore' => 'nullable|string|max:256',
                'lunghezza_esterna' => 'nullable|numeric|min:0',
                'larghezza_esterna' => 'nullable|numeric|min:0',
                'massa' => 'nullable|numeric|min:0',
                'portata' => 'nullable|integer|min:0',
                'cilindrata' => 'nullable|integer|min:0',
                'potenza' => 'nullable|integer|min:0',
                'numero_assi' => 'nullable|integer|min:0'
            ];
        }
    }
