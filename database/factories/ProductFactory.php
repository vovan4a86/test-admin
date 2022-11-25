<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->firstName,
            'brand_id' => $this->faker->firstName,
            'price' => $this->faker->numberBetween(100,5000),
            'description' => $this->faker->text(100),
            'in_stock' => $this->faker->numberBetween(0,1)
        ];
    }
}
