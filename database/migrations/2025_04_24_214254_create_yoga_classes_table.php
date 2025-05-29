<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('yoga_classes', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->foreignId('trainer_id')->constrained()->onDelete('cascade');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->integer('max_participants');
            $table->integer('price');
            $table->string('difficulty_level');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('yoga_classes');
    }
};