<?php

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
        Schema::create('exercise', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('description');
            $table->boolean('bodyWeight');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('gymsession', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->integer('duration');
            $table->string('notes');
            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('exercise_gymsession', function (Blueprint $table) {
            $table->id();
            $table->integer('exercise_id');
            $table->integer('gymsession_id');
            $table->integer('warmup_sets');
            $table->integer('strength_sets');
            $table->integer('iper_sets');
            $table->integer('warmup_weight');
            $table->integer('strength_weight');
            $table->integer('iper_weight');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise');
        Schema::dropIfExists('gymsession');
        Schema::dropIfExists('exercise_gymsession');
    }
};
