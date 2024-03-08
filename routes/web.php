<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return ['Laravel' => app()->version()];
});

require __DIR__.'/auth.php';

die();

//    get (tabella)                                       // index
//    get (tabella/{id})                                  // show
//    get (tabella/search/{search}                        // search
//    get (tabella/{field}/{exact_search}                 // exact search
//    get (tabella/{field}/search/{search}                // field search
//    get (alert_tabella/{id_veicolo}                     // alert show
//    get (alert_tabella/search/{search}                  // alert search
//    get (alert_tabella/{field}/{exact_search}           // alert exact search
//    get (alert_tabella/{field}/search/{search}          // alert field search
//
//
//    // Standard CRUD Routes
//    get (tabella/list)                                  // index
//    get (tabella/create)                                // create form
//    post (tabella/store)                                // store
//    get (tabella/{id}/edit)                             // edit form
//    put (tabella/{id})                                  // update
//    get (tabella/{id}/delete)                           // delete form
//    delete (tabella/{id})                               // destroy
//
//    // Alert Routes
//    get (alert/list)                                    // index
//    get (alert/{table})                                 // show
//
//    // Custom Routes
//    get (import_veicolo)                                // import xml form
//    post (import_veicolo)                               // store xml
//
//    // Maybe Routes
//    get (tabella/{id}/restore)                          // restore
//    get (tabella/{id}/delete)                           // delete
//    get (tabella/{id}/force_delete)                     // force delete
//    get (tabella/{id}/alert)                            // alert show




//php artisan make:model Assicurazione --all
//php artisan make:model Atp --all
//php artisan make:model Bollo --all
//php artisan make:model Bombole --all
//php artisan make:model ImpostazioneAlimentazioneVeicolo --all
//php artisan make:model ImpostazioneAllestimentoVeicolo --all
//php artisan make:model ImpostazioneAsseVeicolo --all
//php artisan make:model ImpostazioneAssicurazioneVeicolo --all
//php artisan make:model ImpostazioneBrokerAssicurazione --all
//php artisan make:model ImpostazioneCambioVeicolo --all
//php artisan make:model ImpostazioneCaselloPedaggio --all
//php artisan make:model ImpostazioneControparteDecorazione --all
//php artisan make:model ImpostazioneDestinazioneVeicolo --all
//php artisan make:model ImpostazioneDisponibilitaVeicolo --all
//php artisan make:model ImpostazioneEnteVeicolo --all
//php artisan make:model ImpostazioneFilialeVeicolo --all
//php artisan make:model ImpostazioneIntestatarioVeicolo --all
//php artisan make:model ImpostazioneManutenzioneVeicolo --all
//php artisan make:model ImpostazioneMarcaVeicolo --all
//php artisan make:model ImpostazioneModelloVeicolo --all
//php artisan make:model ImpostazionePolizzaVeicolo --all
//php artisan make:model ImpostazioneProprietarioVeicolo --all
//php artisan make:model ImpostazioneScadenzaAssicurazione --all
//php artisan make:model ImpostazioneSocietaLeasing --all
//php artisan make:model ImpostazioneSocietaVeicolo --all
//php artisan make:model ImpostazioneStatoAssicurazione --all
//php artisan make:model ImpostazioneStatoMulta --all
//php artisan make:model ImpostazioneStatoPedaggio --all
//php artisan make:model ImpostazioneStatoSinistro --all
//php artisan make:model ImpostazioneStatoVeicolo --all
//php artisan make:model ImpostazioneTipoCliente --all
//php artisan make:model ImpostazioneTipoSocieta --all
//php artisan make:model ImpostazioneTipoVeicolo --all
//php artisan make:model Intervento --all
//php artisan make:model Multa --all
//php artisan make:model Revisione --all
//php artisan make:model Sinistro --all
//php artisan make:model Tachigrafo --all
//php artisan make:model Tagliando --all
//php artisan make:model Targa --all
//php artisan make:model Telaio --all
//php artisan make:model Veicolo --all

