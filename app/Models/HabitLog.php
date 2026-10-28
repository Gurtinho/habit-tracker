<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

#[Fillable(['user_id', 'habit_id', 'completed_at'])]
class HabitLog extends Model
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    public function users(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function habits(): BelongsTo {
        return $this->belongsTo(Habit::class);
    }
}
