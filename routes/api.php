<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarriController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\DescargaController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('barris', BarriController::class);

Route::resource('descarga', DescargaController::class);

Route::get('consulta/{any}/{codi_barri}',[ConsultaController::class,'show']);

Route::get('json-file-download', array('as'=> 'jsonFileDownload', 'uses' => 'JsonController@jsonFileDownload'));