<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoria = new Categoria();
        $categoria->nombre = 'Pescaderia';
        $categoria->save();

        $categoria2 = new Categoria();
        $categoria2->nombre = 'Carniceria';
        $categoria2->save();

        $categoria3 = new Categoria();
        $categoria3->nombre = 'Panaderia';
        $categoria3->save();

        $categoria4 = new Categoria();
        $categoria4->nombre = 'Lacteos';
        $categoria4->save();

        $categoria5 = new Categoria();
        $categoria5->nombre = 'Bebidas';
        $categoria5->save();

        $categoria6 = new Categoria();
        $categoria6->nombre = 'Postres';
        $categoria6->save();

    }
}
