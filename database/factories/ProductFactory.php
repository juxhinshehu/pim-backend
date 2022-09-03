<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => $this->faker->imageUrl(),
            'label' => $this->faker->text(30),
            'status' => $this->faker->boolean(30),            
            'complete' => $this->faker->randomElement([0, 0.25, 0.5, 0.75, 1]),
            'likes' => $this->faker->randomElement([0, 3, 5, 20, 70, 100])
        ];
    }
}