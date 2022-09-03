<?php

namespace Database\Factories;

use App\Models\Metadata;
use Illuminate\Database\Eloquent\Factories\Factory;

class MetadataFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Metadata::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_id' => $this->faker->numberBetween(1,9),
            'url' => $this->faker->url(),
        ];
    }
}