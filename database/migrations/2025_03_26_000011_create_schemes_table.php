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
        Schema::create('schemes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('primary_color')->constrained('colors')->onDelete('cascade');
            $table->foreignId('text_color')->constrained('colors')->onDelete('cascade');
            $table->foreignId('hover_color')->constrained('colors')->onDelete('cascade');
            $table->foreignId('cta_color')->constrained('colors')->onDelete('cascade');
            $table->foreignId('footer_color')->constrained('colors')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schemes');
    }
};
