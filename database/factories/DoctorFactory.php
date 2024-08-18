<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Doctor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    protected $model = Doctor::class;

    public function definition()
    {
        return [
            'date_of_birth' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'phone_number' => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'specialization' => $this->faker->randomElement(['Cardiologist', 'Dermatologist', 'Endocrinologist', 'Gastroenterologist', 'Hematologist', 'Neurologist', 'Oncologist', 'Pediatrician', 'Psychiatrist', 'Radiologist']),
        ];
    }
}
