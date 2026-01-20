<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('permits', function (Blueprint $table) {
            $table->id();
            $table->string('tracking_number')->unique();
            $table->string('applicant_name');
            $table->string('nik');
            $table->string('business_name');
            $table->string('type'); // SIUP, TDP, etc
            $table->enum('status', ['pending', 'review', 'approved', 'rejected'])->default('pending');
            $table->json('documents')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('permits');
    }
};
