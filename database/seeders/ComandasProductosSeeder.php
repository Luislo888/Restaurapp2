<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ComandasProductos;

class ComandasProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comanda1 = ComandasProductos::create([
            'comanda_id' => 1,
            'producto_id' => 1,
        ]);
        $comanda2 = ComandasProductos::create([
            'comanda_id' => 1,
            'producto_id' => 2,
        ]);
        $comanda3 = ComandasProductos::create([
            'comanda_id' => 1,
            'producto_id' => 3,
        ]);
        $comanda4 = ComandasProductos::create([
            'comanda_id' => 2,
            'producto_id' => 1,
        ]);
        $comanda5 = ComandasProductos::create([
            'comanda_id' => 2,
            'producto_id' => 2,
        ]);
        $comanda6 = ComandasProductos::create([
            'comanda_id' => 2,
            'producto_id' => 3,
        ]);
        $comanda7 = ComandasProductos::create([
            'comanda_id' => 2,
            'producto_id' => 4,
        ]);
    }
}
