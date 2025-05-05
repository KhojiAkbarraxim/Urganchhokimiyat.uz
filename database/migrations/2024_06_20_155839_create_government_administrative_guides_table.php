<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('government_administrative_guides', function (Blueprint $table) {
            $table->id();
            $table->text('file_path');
            $table->text('file_size')->nullable();
            $table->string('desc_eng');
            $table->string('desc_ru');
            $table->string('desc_uz');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('government_administrative_guides');
    }
};