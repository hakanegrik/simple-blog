<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [

            'title'=>$this->faker->sentence(rand(3,7)),
            'content'=>$this->faker->text(200),
            'image'=>$this->faker->imageUrl(480,240),

        ];
    }
}
