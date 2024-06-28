<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kasb_guruhs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('ramka');
            $table->text('kod');
            $table->text('oylik');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kasb_guruhs');
    }
};