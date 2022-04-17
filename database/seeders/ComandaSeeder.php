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
        $comanda = Comanda::create([
            'mesa' => 1,
            'comentarios' => 'Sin tomate',
        ]);

        $comanda = Comanda::create([
            'mesa' => 1,
            'comentarios' => 'Con tomate',
        ]);

        $comanda = Comanda::create([
            'mesa' => 1,
            'comentarios' => 'Muy picante',
        ]);

        $comanda = Comanda::create([
            'mesa' => 2,
            'comentarios' => 'Con almendras',
            'estado' => 'en curso',
        ]);

        $comanda = Comanda::create([
            'mesa' => 2,
            'comentarios' => 'Con albondigas',
            'estado' => 'en curso',
        ]);

        $comanda = Comanda::create([
            'mesa' => 2,
            'comentarios' => 'Con tomate',
            'estado' => 'en curso',
        ]);

        $comanda = Comanda::create([
            'mesa' => 3,
            'comentarios' => 'Con tomate',
            'estado' => 'cerrada',
        ]);
        $comanda = Comanda::create([
            'mesa' => 3,
            'comentarios' => 'Con tomate',
            'estado' => 'cerrada',
        ]);
        $comanda = Comanda::create([
            'mesa' => 3,
            'comentarios' => 'Con tomate',
            'estado' => 'abierta',
        ]);
    }
}
