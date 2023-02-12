<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Marca;

class MarcaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $marca1 = new Marca();
        $marca1->nombre = 'CocaCola';
        $marca1->save();

        $marca2 = new Marca();
        $marca2->nombre = 'Danone';
        $marca2->save();

        $marca3 = new Marca();
        $marca3->nombre = 'Pepsi';
        $marca3->save();

        $marca4 = new Marca();
        $marca4->nombre = 'El Establo';
        $marca4->save();

        $marca5 = new Marca();
        $marca5->nombre = 'Cantabrico';
        $marca5->save();

        $marca6 = new Marca();
        $marca6->nombre = 'Bigopan';
        $marca6->save();

        $marca7 = new Marca();
        $marca7->nombre = 'Nestle';
        $marca7->save();

        $marca8 = new Marca();
        $marca8->nombre = 'Palacios';
        $marca8->save();

        $marca9 = new Marca();
        $marca9->nombre = 'Casa tarradellas';
        $marca9->save();

    }
}
