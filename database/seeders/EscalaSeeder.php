<?php

namespace Database\Seeders;

use App\Models\Aeropuerto;
use App\Models\Vuelo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EscalaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $aeropuerto1 = Aeropuerto::find(1);
        $vuelo1 = Vuelo::find(1);
        $vuelo1->aeropuertos()->attach($aeropuerto1,["lugar" => "Aeropuerto Internacional de Maiquetía Simón Bolívar"]);

        $aeropuerto2 = Aeropuerto::find(1);
        $vuelo2 = Vuelo::find(2);
        $vuelo2->aeropuertos()->attach($aeropuerto2,["lugar" => "Antalya Airport"]);

        $aeropuerto3 = Aeropuerto::find(1);
        $vuelo3 = Vuelo::find(10);
        $vuelo3->aeropuertos()->attach($aeropuerto3,["lugar" => "Antalya Airport"]);

        $aeropuerto4 = Aeropuerto::find(1);
        $vuelo4 = Vuelo::find(14);
        $vuelo4->aeropuertos()->attach($aeropuerto4,["lugar" => "Antalya Airport"]);

        $aeropuerto5 = Aeropuerto::find(1);
        $vuelo5 = Vuelo::find(5);
        $vuelo5->aeropuertos()->attach($aeropuerto5,["lugar" => "Fort Lauderdale–Hollywood International Airport"]);

        $aeropuerto6 = Aeropuerto::find(10);
        $vuelo6 = Vuelo::find(3);
        $vuelo6->aeropuertos()->attach($aeropuerto6,["lugar" => "Port Lotniczy Bydgoszcz-Szwederowo"]);

        $aeropuerto7 = Aeropuerto::find(12);
        $vuelo7 = Vuelo::find(4);
        $vuelo7->aeropuertos()->attach($aeropuerto6,["lugar" => "Frankfurt Airport"]);
    }
}
