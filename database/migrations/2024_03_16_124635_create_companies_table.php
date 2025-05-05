<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration
{
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->longText('name');
            $table->foreignId('type_id')->constrained('company_types','id');
            $table->string('director', 100);
            $table->double('longitude', 20);
            $table->double('latitude', 20);
            $table->longText('address');
            $table->string('tel');
            $table->string('email');
            $table->string('site_url')->nullable();
            $table->longText('description_uz');
            $table->longText('description_eng');
            $table->longText('description_ru');
            $table->timestamps();    
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
