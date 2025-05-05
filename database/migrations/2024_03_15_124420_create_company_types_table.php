<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('company_types', function (Blueprint $table) {
            $table->id();
            $table->text('name_uz');
            $table->text('name_eng');
            $table->text('name_ru');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('company_types');
    }
};
