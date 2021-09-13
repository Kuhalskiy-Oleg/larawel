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
        $name = $this->faker->unique()->name($gender);
        return [
            'name'          => $name,
            'avatar'        => $this->faker->imageUrl(1000, 800, '', false, '', false),
            'date_of_birth' => $this->faker->date($format = 'd-m-Y', $max = 'now'),
            'biography'     => $this->faker->text($maxNbChars = 500),
            'slug'          => Str::slug($name)
        ];
    }
}
