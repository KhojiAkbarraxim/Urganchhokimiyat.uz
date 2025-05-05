<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{   
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->text('title_uz');
            $table->text('title_eng');
            $table->text('title_ru');
            $table->longText('content_uz');
            $table->longText('content_eng');
            $table->longText('content_ru');
            $table->foreignId('category_id')->constrained('event_types','id');
            $table->timestamps();
        });
    }   
    public function down(): void    
    {
        Schema::dropIfExists('events');
    }
};
