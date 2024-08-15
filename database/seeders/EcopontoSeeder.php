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
                'latitude'=> $faker->latitude(),
                'longitude' => $faker->longitude(),
                'categoria'=> $faker->userName(),
                'endereco' => $faker->city()
                
            ]);
        }
    }
    
}
