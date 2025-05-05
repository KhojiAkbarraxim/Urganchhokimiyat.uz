<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('mfy_sectors', function (Blueprint $table) {
            $table->id();
            $table->string('tel');
            $table->string('name');
            $table->text('address');
            $table->string('director');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('mfy_sectors');
    }
};
