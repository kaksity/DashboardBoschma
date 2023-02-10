<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Facility;
use App\Models\MaritalStatus;
use App\Models\Ward;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Enrollment>
 */
class EnrollmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ward_id' => Ward::factory(),
            'facility_id' => Facility::factory(),
            'category_id' => Category::factory(),
            'marital_status_id' => MaritalStatus::factory(),
            'first_name' => $this->faker->firstName(),
            'middle_name' => $this->faker->firstName(),
            'surname' => $this->faker->lastName(),
            'gender' => $this->faker->name(),
            'date_of_birth' => $this->faker->date(),
            'number_of_children' => Random::generate(1, '0-9'),
            'phone_number' => $this->faker->phoneNumber(),
            'tribe' => $this->faker->city(),
            'nin_number' => Random::generate(10, '0-9'),
            'religion' => $this->faker->city(),
        ];
    }
}
