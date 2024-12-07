<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        $faker = Faker::create('pt_BR');

        for($i = 0; $i <= 10; $i++){
            DB::table('usuarios')->insert([
                'nome' => $faker->name(),
                'email' => $faker->name(),
                'password' => $faker->name()
                
            ]);
        }
    }
}
