<?php

namespace Database\Seeders;

use App\Models\AuthorArticle;
use Illuminate\Database\Seeder;

class AuthorArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AuthorArticle::factory()->count(10000)->create(); 
    }
}
