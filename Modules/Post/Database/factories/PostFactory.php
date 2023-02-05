<?php

namespace Modules\Post\Database\factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Modules\PostCategory\Entities\PostCategory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = \Modules\Post\Entities\Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'author_id' => User::query()->firstOrFail(),
            'category_id' => PostCategory::query()->inRandomOrder()->firstOrFail(),
            'title' => fake()->text(25),
            'summary' => fake()->paragraph(1),
            'body' => fake()->paragraph,
        ];
    }
}

