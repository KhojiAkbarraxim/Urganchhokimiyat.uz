<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->longText('question_eng');
            $table->longText('question_uz');
            $table->longText('question_ru');
            $table->longText('answer_eng');
            $table->longText('answer_uz');
            $table->longText('answer_ru');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('questions');
    }
};
