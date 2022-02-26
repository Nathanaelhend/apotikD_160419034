<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicines', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('form');
            $table->string('formula');
            $table->string('description');
            $table->bigInteger('Price');
            $table->boolean('faskes 1')->default(0);
            $table->boolean('faskes 2')->default(0);
            $table->boolean('faskes 3')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('medicines');
    }
}
