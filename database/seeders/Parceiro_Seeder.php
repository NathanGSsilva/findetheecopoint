<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;
class Parceiro_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('en_US');

        for($i = 0; $i <= 10; $i++){
            DB::table('parceiros')->insert([
                'nome' => $faker->name(),
                'email'=> $faker->email(),
                'telefone' => $faker->cellphone(),
                'rua'=> $faker->streetName(),
                'numero' => $faker->randomDigit(),
                'bairro' => $faker->city(),
                'cidade' => $faker->city(),
                'cep' => $faker->postcode(),
                'estado' => $faker->stateAbbr()
            ]);
        }
    }
}
