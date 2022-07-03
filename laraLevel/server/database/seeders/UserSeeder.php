<?php

namespace Database\Seeders;

use App\Models\Books;
use App\Models\User;
use Database\Factories\BooksFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->count(3)->has(Books::factory(5))->create();
    }
}
