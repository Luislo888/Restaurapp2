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
        $comanda = ComandasProductos::create([
            'comanda_id' => 1,
            'producto_id' => 1,
        ]);
        $comanda = ComandasProductos::create([
            'comanda_id' => 1,
            'producto_id' => 2,
        ]);
        $comanda = ComandasProductos::create([
            'comanda_id' => 1,
            'producto_id' => 3,
        ]);
        $comanda = ComandasProductos::create([
            'comanda_id' => 2,
            'producto_id' => 1,
        ]);
        $comanda = ComandasProductos::create([
            'comanda_id' => 2,
            'producto_id' => 2,
        ]);
        $comanda = ComandasProductos::create([
            'comanda_id' => 2,
            'producto_id' => 3,
        ]);
        $comanda = ComandasProductos::create([
            'comanda_id' => 2,
            'producto_id' => 4,
        ]);
    }
}
