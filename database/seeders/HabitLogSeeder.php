<?php

namespace Database\Seeders;

use App\Models\HabitLog;
use App\Models\Habit;
use Illuminate\Database\Seeder;

class HabitLogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Habit::query()->each(function (Habit $habit): void {
            foreach (range(0, 4) as $daysAgo) {
                if (fake()->boolean(70)) {
                    HabitLog::factory()->create([
                        'user_id' => $habit->user_id,
                        'habit_id' => $habit->id,
                        'completed_at' => today()->subDays($daysAgo),
                    ]);
                }
            }
        });
    }
}
