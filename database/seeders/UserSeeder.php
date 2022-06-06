<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('pt_BR');

        for($i=0; $i<=20; $i++){
            DB::table('users')->insert([
                "first_name" => $faker->firstName,
                "last_name" => $faker->lastName,
                "email" => $faker->email,
                "password" => bcrypt('12345678')
            ]);
        }
    }
}
