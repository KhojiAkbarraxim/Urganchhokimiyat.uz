<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->text('eng_title')->after('category');
            $table->longText('eng_content')->after('eng_title');
            $table->text('ru_title')->after('eng_content');
            $table->longText('ru_content')->after('ru_title');
        });
    }

    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropColumn('eng_title','eng_content','ru_title','ru_content');
        });
    }
};
