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
        Schema::create('quiz_responses', function (Blueprint $table) {

            $table->id();

            $table->string('wedding_day')->nullable();
            $table->string('dinner_day')->nullable();
            $table->string('favorite_food')->nullable();
            $table->string('dress_style')->nullable();
            $table->string('favorite_color')->nullable();
            $table->integer('kids')->nullable();
            $table->string('weekend_activity')->nullable();
            $table->string('kano_visit')->nullable();
            $table->string('park_visit')->nullable();
            $table->string('honeymoon')->nullable();
            $table->string('anniversary_trip')->nullable();
            $table->string('house_style')->nullable();
            $table->string('date_night')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quiz_responses');
    }
};
