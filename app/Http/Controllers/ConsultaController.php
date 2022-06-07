<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anys;

class ConsultaController extends Controller
{


    public function show($any,$codi_barri)
    {
        return Anys::where('Any','=',$any)
        ->where('Codi_Barri','=',$codi_barri)
        ->get('Preu');

    }

}
