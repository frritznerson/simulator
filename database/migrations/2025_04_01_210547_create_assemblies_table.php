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
        Schema::create('assemblies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('vehicle_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->decimal('total_cost', 10, 2);
            $table->integer('total_time'); // in 2-hour blocks
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
