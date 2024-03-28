<?php
namespace App\Models\Traits;

//use Illuminate\Support\Facades\Validator;

/**
 * Trait Common provides common methods used across multiple classes.
 *
 * @package App\Traits
 */
trait ModelUtilityFunctions
{
    /**
     * Returns the name of the table associated with the current model.
     *
     * @return string The name of the table.
     */
    public static function getTableName(): string
    {
        return (new static)->getTable();
    }

    /**
     * Get the fillable attribute of the model.
     *
     * @return array The fillable attribute of the model.
     */
    public function getFillables() {
        return $this->fillable;
    }

    /**
     * Retrieve the common SELECT fields for the query.
     *
     * @return array
     */
    protected static function commonSelect()
    {
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

        return ([Veicolo::getTableName().'.*',
            static::getTableName().'.*'
            ,'targa.targa as targa'
        ]);
    }

    /**
     * Joins the specified query with common tables used in the application.
     *
     * @param \Illuminate\Database\Query\Builder $query The query to join with common tables.
     * @return \Illuminate\Database\Query\Builder The modified query with joins.
     */
    protected static function commonJoins($query)
    {
        $query=($query->leftJoin(Veicolo::getTableName(), Veicolo::getTableName().'.id', '=', static::getTableName().'.id_veicolo'));

        if(static::getTableName()!=Targa::getTableName()) {
            $query=($query->leftJoin(Targa::getTableName(), Veicolo::getTableName().'.id', '=', Targa::getTableName().'.id_veicolo'));
        }

        return $query;
    }

    /**
     * Adds common "Where" conditions to a query based on the search keyword.
     *
     * @param Illuminate\Database\Query\Builder $query The query builder object.
     * @param string $search The search keyword to be used for filtering results.
     * @return Illuminate\Database\Query\Builder The modified query builder object.
     *
     * @throws <ExceptionType> [Optional] Description of the exception that can be thrown, if applicable.
     *                          Remove this if the method does not throw any exceptions.
     * @throws anotherException [Optional] Another description of an exception that can be thrown, if applicable.
     *                          Remove this if the method does not throw any exceptions.
     */
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
            ->orWhere(ImpostazioneModelloVeicolo::getTableName().'nome', 'LIKE', "%{$search}%")
            ->orWhere('destinazione_uso.nome', 'LIKE', "%{$search}%")
            ->orWhere('tipo_cambio.nome', 'LIKE', "%{$search}%")
            ->orWhere('tipo_asse.nome', 'LIKE', "%{$search}%")
            ->orWhere('tipo_alimentazione.nome', 'LIKE', "%{$search}%")
            ->orWhere('targa.targa', 'LIKE', "%{$search}%"));
    }
}
