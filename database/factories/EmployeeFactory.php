<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::all()->random()->id,
            'employee_id' => fake()->numberBetween($min = 100000, $max = 900000),
            'username' => fake()->userName(),
            'name_prefix' => fake()->title(),
            'first_name' => fake()->firstName(),
            'middle_name_initial' => strtoupper(fake()->randomLetter()),
            'last_name' => fake()->lastName(),
            'gender' => fake()->randomElement($array = array('F', 'M')),
            'email' => fake()->email(),
            'date_of_birth' => fake()->date(),
            'time_of_birth' => fake()->time(),
            'age_in_years' => fake()->randomDigitNotNull(),
            'date_of_joining' => fake()->date(),
            'age_in_company' => fake()->randomDigitNotNull(),
            'phone_number' => fake()->e164PhoneNumber(),
            'place_name' => fake()->city(),
            'county' => fake()->city(),
            'city' => fake()->city(),
            'zip' => fake()->postcode(),
            'region' => fake()->region(),
        ];
    }
}
