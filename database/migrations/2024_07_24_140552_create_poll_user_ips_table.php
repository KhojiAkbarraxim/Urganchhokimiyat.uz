<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('poll_user_ips', function (Blueprint $table) {
            $table->id();
            $table->ipAddress();
            $table->foreignId('poll_id')->constrained('polls', 'id');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('poll_user_ips');
    }
};
