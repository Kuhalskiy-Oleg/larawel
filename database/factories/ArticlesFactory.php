<?php

namespace Database\Factories;

use App\Models\Articles;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ArticlesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Articles::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        //получаем строку из нескольких рандомных слов
        $name_article = $this->faker->text($maxNbChars = 20);
        $name_article = mb_strtolower($name_article);
        $name_article = mb_eregi_replace('[.]', '', $name_article); 
        $name_article = explode(' ', $name_article);
        
        //получаем массив из 2 рандомных слов
        $rand_words = $this->faker->words($nb = 3, $asText = false);

        //соединяем массивы
        array_push($name_article, $rand_words[0] , $rand_words[1]);

        //переиешиваем массив для большей уникальности 
        shuffle($name_article);  

        //преобразуем содержимое массива в строку с разделителем "+" для работы генератора картинок
        $name_article_img = implode('+', $name_article);

        //преобразуем содержимое массива в строку с разделителем "пробел" для уникального названия статьи
        $name_article = implode(' ', $name_article);

        //делаем первую букву в строке заглавной
        $name_article = ucfirst($name_article);
        $name_article_img = ucfirst($name_article_img);

        //шестнадцатеричные числа для hex-кода для работы генератора картинок
        $color = substr(md5(rand()), 0, 6);
      
        return [
            'name_article' => $name_article,
            'image' => "http://dummyimage.com/1000x200/{$color}&text={$name_article_img}",
            'announcement' => $this->faker->text($maxNbChars = 300),
            'text' => $this->faker->text($maxNbChars = 2000),
            'author' =>  $this->faker->numberBetween(1,10000),//указываем id авторов для вторичного ключа
            'categories' => $this->faker->numberBetween(1,12),//от 1 до 12 т.к категорий всего 12
            'slug' => Str::slug($name_article)
        ];


    }
}
