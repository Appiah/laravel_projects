<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array {
        return [
            
            'number' => $this->faker->numberBetween(10, 10000),
            'merchant_id' => $this->faker->numberBetween(3,11),
            'customer_id' => $this->faker->numberBetween(3,11),
            'date' => $this->faker->date,
            'due_date' => $this->faker->date,
            'reference' => 'REF-'.rand(15, 700),
            'terms_n_conditions' => $this->faker->paragraph(2),
            'customer_notes' => $this->faker->paragraph(1),
            'merchant_notes' => $this->faker->paragraph(1),
            'sub_total' => $this->faker->numberBetween(100, 1000),
            'taxes' => $this->faker->numberBetween(10, 100),
            'other_charges' => $this->faker->numberBetween(10, 100),
            'grand_total' => $this->faker->numberBetween(120, 1200)
            
        ];
    }
}
