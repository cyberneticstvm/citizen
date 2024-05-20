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
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('survey_id');
            $table->unsignedBigInteger('question_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('option_id');
            $table->integer('score')->default(0);
            $table->foreign('survey_id')->references('id')->on('surveys')->onDelete('restrict');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('restrict');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('option_id')->references('id')->on('question_options')->onDelete('restrict');
            $table->unique(['survey_id', 'question_id', 'user_id']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('answers');
    }
};
