<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mfys', function (Blueprint $table) {
            $table->id();
            $table->string('tel');
            $table->string('name');
            $table->string('raisi');
            $table->foreignId('sector_id')->constrained('mfy_sectors','id');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('mfys');
    }
};
