<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Enums\ObjectTypes;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('object_locations', function (Blueprint $table) {
            $table->id();
            $table->text('address');
            $table->string('obj_type');
            $table->double('latitude');
            $table->double('longitude');
            $table->integer('tree_count')->default(0);
            $table->foreignId('company_id')->constrained('companies', 'id');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('object_locations');
    }
};
