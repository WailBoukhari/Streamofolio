<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
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
            'thumbnail' => 'assets/img/main/samples/product-1-370x470.jpg',
            'name' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'category' => $this->faker->randomElement(['Category 1', 'Category 2', 'Category 3']),
            'rating' => $this->faker->numberBetween(0, 5),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }

}
