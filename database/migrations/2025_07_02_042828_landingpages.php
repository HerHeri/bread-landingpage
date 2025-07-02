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
        Schema::create('landingpages', function (Blueprint $table) {
            $table->id();
            $table->longText('home_section')->nullable();
            $table->longText('section_2')->nullable();
            $table->string('sub_title')->nullable();
            $table->string('title')->nullable();
            $table->longText('content')->nullable();
            $table->longText('section_promotion')->nullable();
            $table->longText('section_review')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('landingpages');
    }
};
