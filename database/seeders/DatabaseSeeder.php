<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(5)->create();
        \App\Models\Post::factory(20)->create();

        \App\Models\User::create([
            'name' => "Luthfi Nur Ramadhan",
            'username' => "Izuchii1311",
            'email' => "luthfiramadhan.lr55@gmail.com",
            'password' => bcrypt("password")
        ]);

        \App\Models\Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);
        \App\Models\Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);
        \App\Models\Category::create([
            'name' => 'Web Security',
            'slug' => 'web-security',
        ]);
    }
}
