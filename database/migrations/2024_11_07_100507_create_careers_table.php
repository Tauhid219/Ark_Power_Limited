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
        Schema::create('careers', function (Blueprint $table) {
            $table->id();
        
            $table->string('title');           // Job Title
            $table->string('slug')->unique(); // Unique slug
            $table->string('department');      // Department
            $table->string('location');        // Location
            $table->foreignId('career_category_id')->constrained()->onDelete('cascade'); // Link to CareerCategory
            $table->text('description');           // Job Summary
            $table->text('responsibilities');  // Key Responsibilities
            $table->text('required_skills');   // Required Skills
            $table->string('qualifications');  // Qualifications
            $table->text('benefits')->nullable();       // Benefits
            $table->text('application_process'); // How to Apply
            $table->date('deadline'); // Application Deadline
            $table->string('contact_info');    // Contact Information
            $table->boolean('is_active')->default(true); // Job status

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('careers');
    }
};
