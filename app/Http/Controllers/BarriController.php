<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Anys;
use Response;
use View;
use File;

class BarriController extends Controller
{

    public function index()
    {
        return Anys::select('Nom_Barri')
        ->distinct()
        ->get();    
    }
}
