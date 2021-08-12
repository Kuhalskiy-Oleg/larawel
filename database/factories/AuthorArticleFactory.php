<?php

namespace Database\Factories;

use App\Models\AuthorArticle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class AuthorArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = AuthorArticle::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $gender = $this->faker->randomElement(['male', 'female']);
        $FIO = $this->faker->unique()->name($gender);
        $color = substr(md5(rand()), 0, 6);
        return [
            'FIO' => $FIO,
            'avatar' => "http://dummyimage.com/200x200/{$color}",
            'year_of_birth' => $this->faker->date($format = 'd-m-Y', $max = 'now'),
            'biography' => $this->faker->text($maxNbChars = 1000),
            'slug' => Str::slug($FIO)
        ];
    }
}
