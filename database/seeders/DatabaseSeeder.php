<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Books;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Books::create([
            'title' => 'Test1',
            'author' => 'Test Author',
            'genre' => 'Fiction',
        ]);
        Books::create([
            'title' => 'Test2',
            'author' => 'Test Author',
            'genre' => 'Fiction',
        ]);
        Books::create([
            'title' => 'Test3',
            'author' => 'Test Author',
            'genre' => 'Fiction',
        ]);
        Books::create([
            'title' => 'Test4',
            'author' => 'Test Author',
            'genre' => 'Fiction',
        ]);
        Books::create([
            'title' => 'Test5',
            'author' => 'Test Author',
            'genre' => 'Fiction',
        ]);
    }
}
