<?php

use App\Models\Habit;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('habit_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(User::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Habit::class)->constrained()->cascadeOnDelete();
            $table->date('completed_at');
            $table->timestamps();

            // Seta uma validação de unicidade nos dois campos juntos
            // Erro:
            // habit_id = 1 and completed_at = 11/11/2026
            // habit_id = 1 and completed_at = 11/11/2026
            $table->unique(['habit_id', 'completed_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('habit_logs');
    }
};
