<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable(['name', 'user_id'])]
class Habit extends Model
{
    public function users(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function habitLogs(): HasMany {
        return $this->hasMany(HabitLog::class);
    }
}
