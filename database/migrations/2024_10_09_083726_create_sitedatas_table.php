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
        Schema::create('sitedatas', function (Blueprint $table) {
            $table->id();
            $table->string('siteName');
            $table->string('tagLine')->nullable();
            $table->string('logo')->nullable();
            $table->string('favIcon')->nullable();
            $table->string('address')->nullable();
            $table->string('phoneNumber')->nullable();
            $table->string('email');
            $table->string('fbUrl')->nullable();
            $table->string('linkdinUrl')->nullable();
            $table->string('twitterUrl')->nullable();
            $table->string('teligramUrl')->nullable();
            $table->string('instragramUrl')->nullable();
            $table->string('youtubeUrl')->nullable();
            $table->text('about')->nullable();
            $table->text('mission')->nullable();
            $table->text('vision')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sitedatas');
    }
};
