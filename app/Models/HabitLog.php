<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['user_id', 'habit_id', 'completed_at'])]
class HabitLog extends Model
{
    public function users(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function habits(): BelongsTo {
        return $this->belongsTo(Habit::class);
    }
}
