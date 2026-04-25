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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('project_name');
            $table->string('short_description')->nullable();
            $table->longText('detail_text')->nullable();

            $table->string('project_location')->nullable();
            $table->string('project_type')->nullable();

            $table->date('established_date')->nullable();

            $table->string('website')->nullable();

            // JSON field for gallery images
            $table->json('gallery')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
