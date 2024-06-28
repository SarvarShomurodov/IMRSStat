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
        Schema::create('maoshes', function (Blueprint $table) {
            $table->id();
            $table->string('name_summ');
            $table->string('name_foiz');
            $table->integer('widh');
            $table->string('grafik');
            $table->string('oylik');
            $table->string('foiz');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('maoshes');
    }
};
