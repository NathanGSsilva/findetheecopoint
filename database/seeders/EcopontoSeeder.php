<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class EcopontoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        $faker = Faker::create('pt_BR');

        for($i = 0; $i <= 10; $i++){
            DB::table('ecopontos')->insert([
                'nome' => $faker->name(),
                'endereco' => $faker->city(),
                'latitude'=> $faker->latitude(),
                'longitude' => $faker->longitude(),
                'funcionamento'=> $faker->name(),
                'descricao'=> $faker->name(),
                'lixos'=> $faker->name(),
            ]);
        }
    }
    
}
