<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Patient;
use App\Models\User;
use App\Models\Client;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class ReservationFactory extends Factory
{
    protected $model = Reservation::class;

    public function definition()
    {
        return [
            'reservation_date' => $this->faker->dateTimeBetween('now', '+1 month'),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'cancelled']),
            'service_name' => $this->faker->word(),
            'doctor_user_id' => User::factory(),
            'admin_user_id' => User::factory(),
            'client_id' => Client::factory(),
            'patient_id' => Patient::factory(),
        ];
    }
}
