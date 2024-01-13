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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('image')->nullable();
            $table->text('description');
            $table->unsignedBigInteger('tag_id')->nullable();
            $table->unsignedBigInteger('typecourse_id')->nullable();
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->foreign('typecourse_id')->references('id')->on('type_courses')->onDelete('CASCADE')->onUpdate('CASCADE');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
