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
        Schema::table('sitedatas', function (Blueprint $table) {
            $table->text('about')->nullable()->change();
            $table->text('mission')->nullable()->change();
            $table->text('vision')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sitedatas', function (Blueprint $table) {
            $table->string('about')->nullable()->change();
            $table->string('mission')->nullable()->change();
            $table->string('vision')->nullable()->change();
        });
    }
};
