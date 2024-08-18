<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Create each corresponding role for the select tag in the user registration menu
         */
        UserRole::factory()->admin()->create();
        UserRole::factory()->doctor()->create();
        UserRole::factory()->nurse()->create();
    }
}
