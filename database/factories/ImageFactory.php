<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            'url' => $this->faker->imageUrl(360, 360, 'animals', true, 'cats'),
//            'imageable_id' => $this->faker->randomElements([
//                Product::factory(3)->create()->id,
//                Brand::factory(3)->create(),
//            ]),
//            'imageable_type' => function (array $attributes) {
//                return Product::find($attributes['imageable_id'])->type;
//            },
        ];
    }
}
