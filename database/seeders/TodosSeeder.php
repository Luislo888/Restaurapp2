<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $useradmin = User::create([
            'name' => 'admin Luis',
            'last_name' => 'López',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('1234'),
            'rol' => '1',
        ]);

        $user1 = User::create([
            'name' => 'camarero Marcos',
            'last_name' => 'García',
            'email' => 'camarero@gmail.com',
            'password' => Hash::make('1234'),
            'rol' => '2',
        ]);
        $user1 = User::create([
            'name' => 'cocinero Laura',
            'last_name' => 'Carmona',
            'email' => 'cocinero@gmail.com',
            'password' => Hash::make('1234'),
            'rol' => '3',
        ]);
    }
}
