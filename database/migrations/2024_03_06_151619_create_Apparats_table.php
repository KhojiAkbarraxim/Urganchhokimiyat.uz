<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('apparats', function (Blueprint $table) {
            $table->id();
            $table->string('ismi_sharifi');
            $table->string('kasbi');
            $table->string('kasbi_ru');
            $table->string('kasbi_eng');
            $table->longText('hodim_malumotlari');
            $table->longText('hodim_malumotlari_eng');
            $table->longText('hodim_malumotlari_ru');
            $table->longText('majburiyati');   
            $table->longText('majburiyati_ru');   
            $table->longText('majburiyati_eng');
            $table->text('address');
            $table->string('email');            
            $table->string('tel');
            $table->longText('image_path');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('apparats');
    }
};
