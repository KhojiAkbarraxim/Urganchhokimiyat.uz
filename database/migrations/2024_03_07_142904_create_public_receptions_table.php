<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('public_receptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('apparat_id')->constrained('apparats', 'id');
            $table->text('qabul_joyi_manzili');
            $table->dateTime('begin_date');
            $table->tinyInteger('status')->default(0);
            $table->longText('desc_eng');
            $table->longText('desc_uz');
            $table->longText('desc_ru');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('public_receptions');
    }
};
