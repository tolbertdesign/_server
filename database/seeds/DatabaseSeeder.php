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
            'name' => 'Victor Outlook',
            'email' => 'victor.tolbert@outlook.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Victor Hey',
            'email' => 'victor.tolbert@hey.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Vick Nice',
            'email' => 'vicknice@gmail.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name' => 'Victor Tolbert',
            'email' => 'victor.tolbert@gmail.com',
            'password' => Hash::make('password'),
        ]);



    }
}
