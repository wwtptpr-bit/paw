<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('praktikums', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nbi');
            $table->string('kelas');
            $table->string('praktikum');
            $table->string('sesi');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('praktikums');
    }
};