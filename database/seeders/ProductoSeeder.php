<?php

namespace Database\Seeders;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.-
     * @return void
     */
    public function run()
    {
        $producto = new Producto();
        $producto->nombre = 'Chocolate negro 70%';
        $producto->fecha_cad = '20/10/2023';
        $producto->precio = 5;
        $producto->descripcion = 'Este chocolate es 70% puro.';
        $producto->stock = true;
        $producto->calorias = 132.5;
        $producto->peso = 0.1;
        $producto->hidratos = 50;
        $producto->azucares = 12.3;
        $producto->proteinas = 10.2;
        $producto->sal = 3.7;
        $producto->ingredientes = 'Cacao-Leche';
        $producto->origen = 'África';
        $producto->categoria_id = Categoria::find(4)->id ;
        $producto->marca_id = Marca::find(7)->id ;
        $producto->save();
        //--------------------------------
        $producto2 = new Producto();
        $producto2->nombre = 'Yogur griego natural';
        $producto2->fecha_cad = '20/10/2024';
        $producto2->precio = 6;
        $producto2->descripcion = 'Yogur griego natural de caserio';
        $producto2->stock = true;
        $producto2->calorias = 590;
        $producto2->peso = 1;
        $producto2->hidratos = 140;
        $producto2->azucares = 140;
        $producto2->proteinas = 50;
        $producto2->sal = 0;
        $producto2->ingredientes = 'Leche';
        $producto2->origen = 'Grecia';
        $producto2->categoria_id = Categoria::find(4)->id;
        $producto2->marca_id = Marca::find(2)->id;
        $producto2->save();
        //--------------------------------
        $producto3 = new Producto();
        $producto3->nombre = 'Coca-cola zero';
        $producto3->fecha_cad = '20/10/2024';
        $producto3->precio = 70;
        $producto3->descripcion = '72 latas de Coca-cola con 0 azucares añadidos';
        $producto3->stock = true;
        $producto3->calorias = 590;
        $producto3->peso = 23.760;
        $producto3->hidratos = 0;
        $producto3->azucares = 0;
        $producto3->proteinas = 0;
        $producto3->sal = 0;
        $producto3->ingredientes = 'Agua-carbonatada';
        $producto3->origen = 'España';
        $producto3->categoria_id =Categoria::find(5)->id;
        $producto3->marca_id =Marca::find(1)->id;
        $producto3->save();
        //--------------------------------
        $producto4 = new Producto();
        $producto4->nombre = 'Lomo alto de novillo';
        $producto4->fecha_cad = '02/01/2024';
        $producto4->precio = 240;
        $producto4->descripcion = '5 piezas de lomo alto de novillo de 600-800g por corte';
        $producto4->stock = true;
        $producto4->calorias = 2300;
        $producto4->peso = 3.5;
        $producto4->hidratos = 0;
        $producto4->azucares = 0;
        $producto4->proteinas = 1050;
        $producto4->sal = 0;
        $producto4->ingredientes = 'Carne de novillo';
        $producto4->origen = 'Malaga';
        $producto4->categoria_id = Categoria::find(2)->id;
        $producto4->marca_id = Marca::find(4)->id;
        $producto4->save();
        //--------------------------------
        $producto5 = new Producto();
        $producto5->nombre = 'Lomo bajo de novillo';
        $producto5->fecha_cad = '03/09/2023';
        $producto5->precio = 220;
        $producto5->descripcion = '6 piezas de lomo bajo de novillo de 250-300g por corte';
        $producto5->stock = true;
        $producto5->calorias = 1700;
        $producto5->peso = 1.5;
        $producto5->hidratos = 0;
        $producto5->azucares = 0;
        $producto5->proteinas = 960;
        $producto5->sal = 0;
        $producto5->ingredientes = 'Carne de novillo';
        $producto5->origen = 'Malaga';
        $producto5->categoria_id = Categoria::find(2)->id;
        $producto5->marca_id = Marca::find(4)->id;
        $producto5->save();
        //--------------------------------
        $producto6 = new Producto();
        $producto6->nombre = 'Chistorras Artesanales de El Establo';
        $producto6->fecha_cad = '12/05/2023';
        $producto6->precio = 40;
        $producto6->descripcion = '10 piezas de chistorra artesanal de maxima calidad';
        $producto6->stock = true;
        $producto6->calorias = 590;
        $producto6->peso = 0.35;
        $producto6->hidratos = 0;
        $producto6->azucares = 0;
        $producto6->proteinas = 250;
        $producto6->sal = 0;
        $producto6->ingredientes = 'Cerdo';
        $producto6->origen = 'Malaga';
        $producto6->categoria_id = Categoria::find(2)->id;
        $producto6->marca_id = Marca::find(4)->id;
        $producto6->save();
        //--------------------------------
        $producto7 = new Producto();
        $producto7->nombre = 'Anchoa del cantabrico';
        $producto7->fecha_cad = '12/07/2025';
        $producto7->precio = 9;
        $producto7->descripcion = 'Anchoa fresca del cantabrico';
        $producto7->stock = true;
        $producto7->calorias = 300;
        $producto7->peso = 0.30;
        $producto7->hidratos = 0;
        $producto7->azucares = 0;
        $producto7->proteinas = 100;
        $producto7->sal = 7;
        $producto7->ingredientes = 'Anchoa';
        $producto7->origen = 'Pais Vasco';
        $producto7->categoria_id = Categoria::find(1)->id;
        $producto7->marca_id = Marca::find(5)->id;
        $producto7->save();
        //--------------------------------
        $producto8 = new Producto();
        $producto8->nombre = 'Premium-Pizza';
        $producto8->fecha_cad = '02/06/2023';
        $producto8->precio = 40;
        $producto8->descripcion = 'Pizza de queso de calidad cuestionable, lo de encima no se que es';
        $producto8->stock = true;
        $producto8->calorias = 600;
        $producto8->peso = 0.20;
        $producto8->hidratos = 0;
        $producto8->azucares = 0;
        $producto8->proteinas = 0;
        $producto8->sal = 5;
        $producto8->ingredientes = 'Pan';
        $producto8->origen = 'Buenos Aires';
        $producto8->categoria_id = Categoria::find(3)->id;
        $producto8->marca_id = Marca::find(6)->id;
        $producto8->save();
        //--------------------------------
        $producto9 = new Producto();
        $producto9->nombre = 'Tarta de chocolate premium';
        $producto9->fecha_cad = '17/04/2023';
        $producto9->precio = 40;
        $producto9->descripcion = 'Tarta con mezcla espezial de 3 chocolates';
        $producto9->stock = true;
        $producto9->calorias = 900;
        $producto9->peso = 0.5;
        $producto9->hidratos = 0;
        $producto9->azucares = 30;
        $producto9->proteinas = 0;
        $producto9->sal = 0;
        $producto9->ingredientes = 'Chocolate';
        $producto9->origen = 'Nueva Orleans';
        $producto9->categoria_id = Categoria::find(6)->id;
        $producto9->marca_id = Marca::find(8)->id;
        $producto9->save();
        //--------------------------------
        $producto10 = new Producto();
        $producto10->nombre = 'Torrijas con caramelo premium';
        $producto10->fecha_cad = '12/05/2023';
        $producto10->precio = 40;
        $producto10->descripcion = 'Torrijas caseras de calidad exquisita';
        $producto10->stock = true;
        $producto10->calorias = 600;
        $producto10->peso = 0.30;
        $producto10->hidratos = 0;
        $producto10->azucares = 22;
        $producto10->proteinas = 0;
        $producto10->sal = 0;
        $producto10->ingredientes = 'Pan';
        $producto10->origen = 'Nueva Orleans';
        $producto10->categoria_id = Categoria::find(6)->id;
        $producto10->marca_id = Marca::find(8)->id;
        $producto10->save();
        //--------------------------------
        $producto11 = new Producto();
        $producto11->nombre = 'Leche con cereales';
        $producto11->fecha_cad = '11/06/2024';
        $producto11->precio = 7;
        $producto11->descripcion = 'Leche elaborada para el crecimiento de los niños, alto en calcio y hierro';
        $producto11->stock = true;
        $producto11->calorias = 50;
        $producto11->peso = 1;
        $producto11->hidratos = 50;
        $producto11->azucares = 0;
        $producto11->proteinas = 34;
        $producto11->sal = 0;
        $producto11->ingredientes = 'Leche';
        $producto11->origen = 'Mexico';
        $producto11->categoria_id = Categoria::find(4)->id;
        $producto11->marca_id = Marca::find(7)->id;
        $producto11->save();
        //--------------------------------
        $producto12 = new Producto();
        $producto12->nombre = 'Pack de pepsis';
        $producto12->fecha_cad = '07/07/2024';
        $producto12->precio = 70;
        $producto12->descripcion = '72 latas de Pepsi';
        $producto12->stock = true;
        $producto12->calorias = 590;
        $producto12->peso = 23.760;
        $producto12->hidratos = 0;
        $producto12->azucares = 0;
        $producto12->proteinas = 0;
        $producto12->sal = 0;
        $producto12->ingredientes = 'Agua-carbonatada';
        $producto12->origen = 'Mexico';
        $producto12->categoria_id = Categoria::find(5)->id;
        $producto12->marca_id = Marca::find(3)->id;
        $producto12->save();
        //--------------------------------
        $producto13 = new Producto();
        $producto13->nombre = 'Pate iberico';
        $producto13->fecha_cad = '23/04/2025';
        $producto13->precio = 12;
        $producto13->descripcion = 'Pate Iberico de Casa Tarradellas de alta calidad';
        $producto13->stock = true;
        $producto13->calorias = 70;
        $producto13->peso = 0.5;
        $producto13->hidratos = 0.9;
        $producto13->azucares = 0.9;
        $producto13->proteinas = 8.6;
        $producto13->sal = 1.8;
        $producto13->ingredientes = 'Grasa de Pato';
        $producto13->origen = 'Pais Vasco';
        $producto13->categoria_id = Categoria::find(2)->id;
        $producto13->marca_id = Marca::find(9)->id;
        $producto13->save();
    }
}
