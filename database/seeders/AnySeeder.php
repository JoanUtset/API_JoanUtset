<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anys;

class AnySeeder extends Seeder
{
    public function run()
    {
        Anys::truncate();
  
        $csvFile = fopen(base_path("database/data/merge-csv.com__629f35b63e51c.csv"), "r");
  
        $firstline = true;
        while (($data = fgetcsv($csvFile, 2000, ",")) !== FALSE) {
            if (!$firstline) {
                Anys::create([
                    "Any"=> $data['0'],
                    "Trimestre" => $data['1'],
                    "Codi_Districte" => $data['2'],
                    "Nom_Districte" => $data['3'],
                    "Codi_Barri" => $data['4'],
                    "Nom_Barri" => $data['5'],
                    "Lloguer_mitja" => $data['6'],
                    "Preu" => $data['7']
                ]);    
            }
            $firstline = false;
        }
   
        fclose($csvFile);
    }
}
