<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('news')->insert($this->getData());
    }

    public function getData(): array
    {
        $faker = \Faker\Factory::create('ru_RU');
        $data = [];

        $categories = \DB::table('categories')->get('id');
        $categoriesArr = [];
        foreach ($categories as $item){
            $categoriesArr[] = $item->id;
        }
        $lengthCategories = count($categoriesArr);

        //dd($categoriesArr);

        for ($i = 0; $i < 100; $i++){

            $positionInArrayOfCategories = Rand(0,$lengthCategories-1);
            $data[] =[
                'title' => $faker->sentence(mt_rand(3,10)),
                'text' => $faker->realText(mt_rand(300,500)),
                'description' => $faker->realText(mt_rand(30,50)),
                'category_id' => $categoriesArr[$positionInArrayOfCategories],
                'published' => true,
                'created_at' => now(),
                'updated_at' => now()
            ];
        }

        return $data;
    }

}
