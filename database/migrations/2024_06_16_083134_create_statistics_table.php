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
        Schema::create('statistics', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('year_2010');
            $table->string('year_2011');
            $table->string('year_2012');
            $table->string('year_2013');
            $table->string('year_2014');
            $table->string('year_2015');
            $table->string('year_2016');
            $table->string('year_2017');
            $table->string('year_2018');
            $table->string('year_2019');
            $table->string('year_2020');
            $table->string('year_2021');
            $table->string('year_2022');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('statistics');
    }
};
