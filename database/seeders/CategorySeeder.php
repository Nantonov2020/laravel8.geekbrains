<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('categories')->insert($this->getData());
    }

    public function getData(): array
    {
        $faker = Factory::create('ru_RU');

        $data = [];
        for ($i = 0; $i < 10; $i++){
            $val = $faker->sentence(mt_rand(3,10));
            $slug = Str::slug($val);
            //Str::slug($val);
            $data[] =[
              'title' => $val,
              'slug' => $slug
            ];
        }

        return $data;
    }
}
