<?php

namespace App\Http\Controllers;

use App\Models\Anys;
use Response;
use File;

class DescargaController extends Controller
{

    public function index()
    {
        return Anys::all();
    }

    public function show($id)
    {
        $data = Anys::all()
        ->where('Codi_Barri','=',$id);

        $jsongFile = time() . '_file.json';

        File::put(public_path('/'.$jsongFile), $data);
  
        return Response::download(public_path('/'.$jsongFile));
    }

}
