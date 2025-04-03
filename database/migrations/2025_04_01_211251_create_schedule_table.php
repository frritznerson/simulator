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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('assembly_id')->constrained()->onDelete('cascade');
            $table->foreignId('robot_id')->constrained()->onDelete('cascade');
            $table->integer('day'); // 1-5
            $table->integer('time_slot'); // 1-4
            $table->foreignId('module_id')->constrained()->onDelete('cascade');
            $table->enum('status', ['pending', 'in_progress', 'completed'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
