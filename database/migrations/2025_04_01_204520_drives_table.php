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
        Schema::create('drives', function(Blueprint $table){
            $table->id();
            $table->foreignId('module_id')->constrained()->onDelete('cascade');
            $table->enum('type', ['hydrogen', 'electric']);
            $table->integer('power');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
