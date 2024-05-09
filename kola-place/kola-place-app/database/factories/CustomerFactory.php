<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */
    public function definition(): array
    {
        return [
            'user_id' => rand(3, 11),
            'socket_id'  => fake()->unique()->numerify('##############'),
            'pocket_id' => rand(1, 11),
            'settings_n_preferences_id' => rand(1, 11),
            'payments_n_preferences_id' => rand(1, 11),
            'delivery_n_preferences_id' => rand(1, 11),
            'trnx_rules_id' => rand(1, 11),
            'kyc_id' => rand(1, 11),
            'kyb_id' => rand(1, 11),
            'firstname' => fake()->unique()->name(),
            'lastname' => fake()->unique()->name(),
            'dob' => $this->faker->dateTimeInInterval($startDate = '-16 years', $endDate = 'now', $timezone = null),
            'gender' => rand(1,3),
            'email' => $this->faker->email,
            'address_def' => $this->faker->address,
            'phone_00_country_call_code' => '233',
            'phone_00' => '233'.fake()->unique()->numerify('#########'),
            'referral_program_id' => rand(1, 1000),
            'devices' => fake()->unique()->numerify('######').'_'.fake()->unique()->numerify('#########').'_'.fake()->unique()->numerify('#########').'_'.fake()->unique()->numerify('######'),
            'fingerprints' => fake()->unique()->numerify('##############').'-'.fake()->unique()->numerify('##############').'-'.fake()->unique()->numerify('##############'),
            'last_login' => now(),
            'token_val' => rand(111111, 999999),
            'trnx_period' => 'H',
            'trnx_per_period' => '5'
        ];
    }
}
