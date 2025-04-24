<?php

namespace Database\Factories;

use App\Models\Todo;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Todo::class;
    
     public function definition()
    {
        return [
            'content' => $this->faker->text(20),
            'category_id' => Category::inRandomOrder()->first()->id ?? Category::factory(),
        ];
    }
}
