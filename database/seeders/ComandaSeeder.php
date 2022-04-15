<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comanda;

class ComandaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comanda1 = Comanda::create([
            'mesa' => 1,
            'comentarios' => 'Sin tomate',
            'camarero_id' => 2,
        ]);

        $comanda1 = Comanda::create([
            'mesa' => 2,
            'comentarios' => 'Con tomate',
            'camarero_id' => 2,
        ]);
    }
}
