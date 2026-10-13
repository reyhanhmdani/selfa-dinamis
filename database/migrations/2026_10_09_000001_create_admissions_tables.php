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
        Schema::create('admission_waves', function (Blueprint $table) {
            $table->id();
            $table->string('wave_name');
            $table->boolean('is_active')->default(true);
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('brochure_file')->nullable();
            $table->string('whatsapp_number')->default('082122073707');
            $table->text('announcement')->nullable();
            $table->timestamps();
        });

        Schema::create('admission_fees', function (Blueprint $table) {
            $table->id();
            $table->string('program_type'); // 'kbtk', 'sd', 'ponpes'
            $table->string('title');
            $table->unsignedBigInteger('registration_fee')->default(0);
            $table->unsignedBigInteger('enrollment_fee')->default(0); // Uang Pangkal / Masuk
            $table->unsignedBigInteger('monthly_tuition')->default(0); // SPP Bulanan
            $table->unsignedBigInteger('uniform_fee')->nullable(); // Seragam / Perlengkapan
            $table->json('features')->nullable(); // Array of included items
            $table->string('notes')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_published')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admission_fees');
        Schema::dropIfExists('admission_waves');
    }
};
