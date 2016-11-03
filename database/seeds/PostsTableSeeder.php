<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
   
    public function run()
    {
      $faker = Faker::create();
      foreach (range(1,35) as $index) {
        DB::table('posts')->insert([
            'title' => $faker->sentence,
            'body' => implode($faker->paragraphs(5)),
            'slug' => $faker->slug,
            'image' => $faker->imageUrl($width = 640, $height = 480),
            'category_id' => $faker->randomDigitNotNull,
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);
      }
    }

    
}
