<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('reviews')->insert($this->getData());
    }

    public function getData(): array
    {
        $faker = Factory::create('ru_RU');

        $data = [];
        for ($i = 0; $i < 50; $i++){
            $data[] =[
                'name' => $faker->sentence(mt_rand(1,3)),
                'email' => $faker->email,
                'text' => $faker->realText(mt_rand(100,200)),
                'created_at' => now(),
                'updated_at' => now()
            ];
        }
        return $data;
    }
}
