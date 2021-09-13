<?php

namespace Database\Seeders;

use App\Models\CategoryArticle;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Faker\Factory;

class CategoryArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {	
        $faker = Factory::create();

        $category = [

            [
                'img' => $faker->imageUrl(1000, 600, '', false, '', false),   
                'description' => $faker->text($maxNbChars = 1000),
                'slug' => Str::slug('Политика'),
                'title' => 'Политика',
                'children' => [
                    [                            
                        'img' => $faker->imageUrl(1000, 600, '', false, '', false),  
                        'description' => $faker->text($maxNbChars = 1000),
                        'slug' => Str::slug('Выборы'),
                        'title' => 'Выборы',                           
                    ],
                    [                            
                        'img' => $faker->imageUrl(1000, 600, '', false, '', false),  
                        'description' => $faker->text($maxNbChars = 1000),
                        'slug' => Str::slug('Саммиты'),
                        'title' => 'Саммиты',
                    ],
                ],
            ],
            [    
                'img' => $faker->imageUrl(1000, 600, '', false, '', false), 
                'description' => $faker->text($maxNbChars = 1000),
                'slug' => Str::slug('Спорт'),
                'title' => 'Спорт',
                'children' => [
                    [   
                        'img' => $faker->imageUrl(1000, 600, '', false, '', false),  
                        'description' => $faker->text($maxNbChars = 1000),
                        'slug' => Str::slug('Летние виды спорта'),
                        'title' => 'Летние виды спорта',
                        'children' => [
                            [
                                'img' => $faker->imageUrl(1000, 600, '', false, '', false), 
                                'description' => $faker->text($maxNbChars = 1000),
                                'slug' => Str::slug('Футбол'),
                                'title' => 'Футбол'
                            ],
                            [
                                'img' => $faker->imageUrl(1000, 600, '', false, '', false), 
                                'description' => $faker->text($maxNbChars = 1000),
                                'slug' => Str::slug('Плавание'),
                                'title' => 'Плавание'
                            ],
                            [
                                'img' => $faker->imageUrl(1000, 600, '', false, '', false), 
                                'description' => $faker->text($maxNbChars = 1000),
                                'slug' => Str::slug('Велоспорт'),
                                'title' => 'Велоспорт'
                            ],
                        ],    
                    ],
                    [
                        'img' => $faker->imageUrl(1000, 600, '', false, '', false),   
                        'description' => $faker->text($maxNbChars = 1000),
                        'slug' => Str::slug('Зимние виды спорта'),
                        'title' => 'Зимние виды спорта',
                        'children' => [
                            [
                                'img' => $faker->imageUrl(1000, 600, '', false, '', false), 
                                'description' => $faker->text($maxNbChars = 1000),
                                'slug' => Str::slug('Биатлон'),
                                'title' => 'Биатлон'
                            ],
                            [
                                'img' => $faker->imageUrl(1000, 600, '', false, '', false), 
                                'description' => $faker->text($maxNbChars = 1000),
                                'slug' => Str::slug('Хоккей'),
                                'title' => 'Хоккей'
                            ],
                            [
                                'img' => $faker->imageUrl(1000, 600, '', false, '', false), 
                                'description' => $faker->text($maxNbChars = 1000),
                                'slug' => Str::slug('Фигурное катание'),
                                'title' => 'Фигурное катание'
                            ],
                        ],   
                    ],
                ],
            ],               
        ];
		foreach ($category as $item){
            CategoryArticle::create($item);  
        }
    }
}
