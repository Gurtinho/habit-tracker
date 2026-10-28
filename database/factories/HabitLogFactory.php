<?php

namespace Database\Factories;

use App\Models\Habit;
use App\Models\User;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class HabitLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'habit_id' => Habit::factory(),
            'completed_at' => today(),
        ];
    }
}
