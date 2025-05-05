<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('subscribed_emails', function (Blueprint $table) {
            $table->id();
            $table->string('email',40);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('subscribed_emails');
    }
};
