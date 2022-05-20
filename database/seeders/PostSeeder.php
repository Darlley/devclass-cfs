<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create('pt_BR');
        $userId = User::all()->pluck('id')->toArray();

        for($i = 0; $i <= 10; $i++){
            DB::table('posts')->insert([
                'userId' => $faker->randomElement($userId),
                'title' => $faker->sentence(4),
                'slug' => $faker->slug,
                'content' => $faker->paragraph
            ]);
        }
    }
}
