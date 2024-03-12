<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVeicoloRequest;
use App\Http\Requests\UpdateVeicoloRequest;
use App\Models\Veicolo;
use http\Client\Request;

class VeicoloController extends Controller
{
    protected $model = Veicolo::class;
    //Route::get('veicolo', [VeicoloController::class, 'dashboard'])->name('veicolo.dashboard');
    public function dashboard()
    {
        //
    }

    //Route::get('veicolo/{id}', [VeicoloController::class, 'show'])->name('veicolo.show');
    public function show($id)
    {
        //
    }

    //Route::get('veicolo/search/{search}', [VeicoloController::class, 'search'])->name('veicolo.search');
    public function search(Request $request)
    {
        $query = $request->input('query', '');
        $field = $request->input('field', null);
        $exact = $request->boolean('exact', false);
        $fields = $request->input('fields', null);

        // Use dynamic model binding
        $modelQuery = app($this->model)->query();

        if ($fields) {
            $searchFields = array_map('trim', explode(',', $fields));
            foreach ($searchFields as $searchField) {
                $modelQuery = $modelQuery->orWhere($searchField, $exact ? '=' : 'LIKE', $exact ? $query : "%$query%");
            }
        } elseif ($field) {
            $modelQuery = $modelQuery->where($field, $exact ? '=' : 'LIKE', $exact ? $query : "%$query%");
        } else {
            $modelQuery = $modelQuery->where(function ($q) use ($query) {
                $q->where('name', 'LIKE', "%$query%")
                    ->orWhere('license_plate', 'LIKE', "%$query%");
                // Adjust these fields based on your model's searchable attributes
            });
        }

        return $modelQuery->get();
    }


    //Route::get('veicolo/{field}/{exact_search}', [VeicoloController::class, 'exact_search'])->name('veicolo.exact_search');
    public function exact_search($field, $exact_search)
    {
        //
    }

    //Route::get('veicolo/{field}/search/{search}', [VeicoloController::class, 'field_search'])->name('veicolo.field_search');
    public function field_search($field, $search)
    {
        //
    }

    //Route::get('alert_veicolo/{id}', [VeicoloController::class, 'alert_show'])->name('alert_veicolo.show');
    public function alert_show($id)
    {
        //
    }

    //Route::get('alert_veicolo/search/{search}', [VeicoloController::class, 'alert_search'])->name('alert_veicolo.search');
    public function alert_search($search)
    {
        //
    }

    //Route::get('alert_veicolo/{field}/{exact_search}', [VeicoloController::class, 'alert_exact_search'])->name('alert_veicolo.exact_search');
    public function alert_exact_search($field, $exact_search)
    {
        //
    }

    //Route::get('alert_veicolo/{field}/search/{search}', [VeicoloController::class, 'alert_field_search'])->name('alert_veicolo.field_search');
    public function alert_field_search($field, $search)
    {
        //
    }

    //Route::get('veicolo/list', [VeicoloController::class, 'index'])->name('veicolo.index');
    public function index()
    {
        //
    }

    //Route::get('veicolo/create', [VeicoloController::class, 'create'])->name('veicolo.create');
    public function create()
    {
        //
    }

    //Route::post('veicolo/store', [VeicoloController::class, 'store'])->name('veicolo.store');
    public function store(StoreVeicoloRequest $request)
    {
        //
    }

    //Route::get('veicolo/{id}/edit', [VeicoloController::class, 'edit'])->name('veicolo.edit');
    public function edit($id)
    {
        //
    }

    //Route::put('veicolo/{id}', [VeicoloController::class, 'update'])->name('veicolo.update');
    public function update(UpdateVeicoloRequest $request, $id)
    {
        //
    }
    //Route::get('veicolo/{id}/delete', [VeicoloController::class, 'delete'])->name('veicolo.delete');
    /**
     * Show the prompt for editing the specified resource.
     */
    public function delete($id) {

    }
    //Route::delete('veicolo/{id}', [VeicoloController::class, 'destroy'])->name('veicolo.destroy');
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Veicolo $veicolo)
    {
        //
    }
}
