<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UsersComandas;

class UsersComandasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comanda = UsersComandas::create([
            'user_id' => 2,
            'comanda_id' => 1,
        ]);

        $comanda = UsersComandas::create([
            'user_id' => 2,
            'comanda_id' => 2,
        ]);

        $comanda = UsersComandas::create([
            'user_id' => 2,
            'comanda_id' => 3,
        ]);

        $comanda = UsersComandas::create([
            'user_id' => 2,
            'comanda_id' => 4,
        ]);

        $comanda = UsersComandas::create([
            'user_id' => 2,
            'comanda_id' => 5,
        ]);

        $comanda = UsersComandas::create([
            'user_id' => 2,
            'comanda_id' => 6,
        ]);

        $comanda = UsersComandas::create([
            'user_id' => 2,
            'comanda_id' => 7,
        ]);

        $comanda = UsersComandas::create([
            'user_id' => 2,
            'comanda_id' => 8,
        ]);

        $comanda = UsersComandas::create([
            'user_id' => 3,
            'comanda_id' => 9,
        ]);
    }
}
