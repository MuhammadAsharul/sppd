<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instansis', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->required();
            $table->string('alamat')->required();
            $table->string('telepon')->required();
            $table->string('faksimile')->required();
            $table->string('website')->required();
            $table->string('email')->required();
            $table->integer('kodepos')->required();
            $table->string('kepala_dinas')->required();
            $table->string('pejabat_pelaksana')->required();
            $table->string('bendahara')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('instansi');
    }
};
