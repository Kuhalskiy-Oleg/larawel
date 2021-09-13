<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        $title = $this->faker->unique()->text($maxNbChars = 20);
      
        return [
            'title'        => $title,
            'img'          => $this->faker->imageUrl(1000, 800, '', false, '', false),
            'announcement' => $this->faker->text($maxNbChars = 300),
            'text'         => $this->faker->text($maxNbChars = 2000),
            'author_id'    => $this->faker->numberBetween(1,100),//указываем id авторов для вторичного ключа
            'category_id'  => $this->faker->numberBetween(1,12),
            'slug'         => Str::slug($title)
        ];
    }
}
