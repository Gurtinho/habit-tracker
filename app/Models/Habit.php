<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'user_id'])]
class Habit extends Model
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    public function users(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function habitLogs(): HasMany {
        return $this->hasMany(HabitLog::class);
    }
}
