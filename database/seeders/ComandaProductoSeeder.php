<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\comanda_producto;


class ComandaProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comanda = comanda_producto::create([
            'comanda_id' => 1,
            'producto_id' => 1,
        ]);
        $comanda = comanda_producto::create([
            'comanda_id' => 1,
            'producto_id' => 2,
        ]);
        $comanda = comanda_producto::create([
            'comanda_id' => 1,
            'producto_id' => 3,
        ]);
        $comanda = comanda_producto::create([
            'comanda_id' => 2,
            'producto_id' => 1,
        ]);
        $comanda = comanda_producto::create([
            'comanda_id' => 2,
            'producto_id' => 2,
        ]);
        $comanda = comanda_producto::create([
            'comanda_id' => 2,
            'producto_id' => 3,
        ]);
        $comanda = comanda_producto::create([
            'comanda_id' => 2,
            'producto_id' => 4,
        ]);
    }
}
