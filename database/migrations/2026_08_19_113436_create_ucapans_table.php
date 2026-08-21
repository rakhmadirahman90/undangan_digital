<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ucapans', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('attendance');
            $table->integer('person_count')->default(1);
            $table->text('message');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ucapans');
    }
};