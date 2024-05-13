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
            'image_path_0' => rand(1111111,9999999) . '_' . now() . '_' . '.jpg',
        
            'image_alt_txt_0' => $this->faker->text,
            'image_description_0' => $this->faker->text,

            //'image_path_1' => rand(1111111,9999999) . '_' . now() . '_' . '.jpg',
            //'image_alt_txt_1' => $this->faker->text,
            //'image_description_1' => $this->faker->text,

            //'product_multimedia_total')->default(1);
        ];
    }
}
