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
        Schema::create('ruang_operasis', function (Blueprint $table) {
            $table->id();
            $table->string('no_ruang');
            $table->string('status');
            $table->foreignId('nama_dokter')->constrained( 'dokters','nama')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('nama_pasien')->constrained( 'pasiens','nama')->onDelete('restrict')->onUpdate('restrict');
            $table->foreignId('nama_alat')->constrained( 'alat__kesehatans','nama_alat')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('ruang_operasis');
    }
};
