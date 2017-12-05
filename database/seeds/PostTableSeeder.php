<?php

use Illuminate\Database\Seeder;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('post')->insert([
                'author'  => App\User::inRandomOrder()->first()->id,
                'title'   => $faker->title,
                'content' => $faker->text
            ]);
        }
    }
}
