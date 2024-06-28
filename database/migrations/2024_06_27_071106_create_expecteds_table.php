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
        Schema::create('expecteds', function (Blueprint $table) {
            $table->id();
            $table->string('kasblar');
            $table->integer('OR');
            $table->integer('QR');
            $table->integer('AN');
            $table->integer('BX');
            $table->integer('JZ');
            $table->integer('QD');
            $table->integer('NY');
            $table->integer('NM');
            $table->integer('SM');
            $table->integer('SX');
            $table->integer('SR');
            $table->integer('TV');
            $table->integer('FA');
            $table->integer('XR');
            $table->integer('TSH');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('expecteds');
    }
};
