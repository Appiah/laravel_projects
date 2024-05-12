<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FetchProductImage>
 */
class FetchProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => rand(1, 10),
            'image' => 'Product Name'.rand(10, 1000),
            'description' => 'Description of Product is '.rand(10, 1000),
            'currency_id' => '1',//during the creation this can be properly affixed
            'unit_price' => mt_rand(50, 10000)
        ];
    }
}
