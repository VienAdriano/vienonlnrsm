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
        Schema::create('personalinfo', function (Blueprint $table) {
            $table->id();
            $table->string('dateOfBirth');
            $table->string('placeOfBirth');
            $table->integer('age');
            $table->string('sex');
            $table->string('nationality');
            $table->string('civilStatus');
            $table->string('height');
            $table->string('weight');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
