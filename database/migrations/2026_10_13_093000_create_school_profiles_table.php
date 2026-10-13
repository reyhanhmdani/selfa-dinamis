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
        Schema::create('school_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('division')->unique(); // general, kbtk, sd, ponpes
            $table->string('title');
            $table->string('badge')->nullable(); // e.g. "Arah & Tujuan Kami"
            $table->text('vision');
            $table->json('missions'); // array of strings / objects
            $table->string('about_title')->nullable(); // e.g. "Sejarah Singkat"
            $table->text('about_text')->nullable();
            $table->string('about_image')->nullable();
            $table->json('features')->nullable(); // array of strings (keunggulan)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_profiles');
    }
};
