<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class ProductsTableSeeder extends Seeder
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
        DB::table('products')->insert([
            'name' => $faker->word,
            'description' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'benefit' => $faker->sentence($nbWords = 6, $variableNbWords = true),
            'slug' => $faker->slug,
            'price' => $faker->numberBetween($min = 9, $max = 60),
            'manufacturer' => $faker->word,
            'sku' => $faker->numerify($string = '#######'),
            'image' => $faker->imageUrl($width = 487, $height = 250),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

      }
    }

    public function index()
    {
      return view('inventory.index');
    }
}
