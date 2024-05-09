<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'item_code' => 'IC-1000'.rand(10, 1000),
            'item_name' => 'Product Name'.rand(10, 1000),
            'description' => 'Description of Product is '.rand(10, 1000),
            'currency_id' => '1',//during the creation this can be properly affixed
            'unit_price' => mt_rand(50, 10000)
        ];
    }
}
