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
        Schema::create('spts', function (Blueprint $table) {
            $table->id();
            $table->string('dasar_perintah', 100)->required();
            $table->string('maksud_tugas', 100)->required();
            $table->date('hari_tgl', 100)->required();
            $table->dateTime('waktu')->required();
            $table->string('tempat')->required();
            $table->string('tempat_ditetapkan')->required();
            $table->date('tgl_ditetapkan')->required();
            $table->foreignId('yang_menetapkan')->references('id')->on('pegawais')->onDelete('restrict');
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
        Schema::dropIfExists('spts');
    }
};
