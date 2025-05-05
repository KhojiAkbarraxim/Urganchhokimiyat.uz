<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('polls', function (Blueprint $table) {
            $table->longText('eng_question')->after('question');
            $table->longText('ru_question')->after('eng_question');
            $table->smallInteger('archive_status')->default(0);
        });
    }
    public function down(): void
    {
        Schema::table('polls', function (Blueprint $table) {
            $table->dropColumn('eng_question','ru_question','archive');
        });
    }
};
