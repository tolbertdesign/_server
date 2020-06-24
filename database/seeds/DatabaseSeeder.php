<?php

use App\Book;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ArticleSeeder::class);
        // $this->call(PodcastSeeder::class);
        $this->call(ProgramSeeder::class);

        Book::truncate();

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Book::create([
                'title' => $faker->sentence,
                'author' => $faker->name,
            ]);
        }

        User::truncate();

        User::create([
            'name' => 'Victor',
            'email' => 'victor.tolbert@hey.com',
            'password' => Hash::make('password'),
        ]);

    }
}
