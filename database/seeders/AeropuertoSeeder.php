<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Aeropuerto;

class AeropuertoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aeropuerto = new Aeropuerto();
        $aeropuerto->nombre = 'Albacete';
        $aeropuerto->save();

        $aeropuerto2 = new Aeropuerto();
        $aeropuerto2->nombre = 'Almería';
        $aeropuerto2->save();

        $aeropuerto3 = new Aeropuerto();
        $aeropuerto3->nombre = 'Adolfo Suárez Madrid-Barajas';
        $aeropuerto3->save();

        $aeropuerto4 = new Aeropuerto();
        $aeropuerto4->nombre = 'Alicante-Elche Miguel Hernández';
        $aeropuerto4->save();



        $aeropuerto5 = new Aeropuerto();
        $aeropuerto5->nombre = 'Dallas Fort Worth International Airport';
        $aeropuerto5->save();

        $aeropuerto6 = new Aeropuerto();
        $aeropuerto6->nombre = 'Aeropuerto Internacional Bonilla Aragón';
        $aeropuerto6->save();

        $aeropuerto7 = new Aeropuerto();
        $aeropuerto7->nombre = 'Indira Gandhi International Airport';
        $aeropuerto7->save();

        $aeropuerto8 = new Aeropuerto();
        $aeropuerto8->nombre = 'Entebbe International Airport';
        $aeropuerto8->save();

        $aeropuerto9 = new Aeropuerto();
        $aeropuerto9->nombre = 'Tokyo Haneda Airport';
        $aeropuerto9->save();

        $aeropuerto10 = new Aeropuerto();
        $aeropuerto10->nombre = 'Charles de Gaulle Airport';
        $aeropuerto10->save();

        $aeropuerto11 = new Aeropuerto();
        $aeropuerto11->nombre = 'Moscow Domodedovo Airport';
        $aeropuerto11->save();

        $aeropuerto12 = new Aeropuerto();
        $aeropuerto12->nombre = 'Aeropuerto de San Sebastián (EAS)';
        $aeropuerto12->save();

        $aeropuerto13 = new Aeropuerto();
        $aeropuerto13->nombre = 'Københavns Lufthavn';
        $aeropuerto13->save();
    }
}
