<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Beto Dubal',
            'email' => 'beto.dubal@gmail.com',
            'password' => bcrypt('123456789')
        ])->assignRole('Administrador');

        User::factory(49)->create();
    }
}
