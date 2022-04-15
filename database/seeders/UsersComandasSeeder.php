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
        $comanda1 = UsersComandas::create([
            'user_id' => 2,
            'comanda_id' => 1,
        ]);

        $comanda2 = UsersComandas::create([
            'user_id' => 2,
            'comanda_id' => 2,
        ]);
    }
}
