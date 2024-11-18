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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique(); // For SEO-friendly URLs
            $table->text('content');  // Main body of the post
            $table->string('featured_image')->nullable();  // Image URL
            $table->foreignId('category_id')->constrained()->onDelete('cascade'); // Category of the post
            $table->boolean('published')->default(false);  // Post status
            $table->timestamp('published_at')->nullable(); // Publishing date

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
