<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\UserRole;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserRole>
 */
class UserRoleFactory extends Factory
{
    protected $model = UserRole::class;

    public function definition()
    {
        // This method will not be used directly for generating the three roles
        return [
            'role' => $this->faker->unique()->word(),
        ];
    }

    /**
     * State for the Admin role.
     */
    public function admin()
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'Admin',
        ]);
    }

    /**
     * State for the Doctor role.
     */
    public function doctor()
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'Doctor',
        ]);
    }

    /**
     * State for the Nurse role.
     */
    public function nurse()
    {
        return $this->state(fn (array $attributes) => [
            'role' => 'Nurse',
        ]);
    }
}
