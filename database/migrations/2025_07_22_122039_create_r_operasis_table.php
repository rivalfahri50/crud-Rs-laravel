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
            $table->integer('no_ruang');
            $table->string('status');
            $table->foreignId('dokter_id')->constrained('dokters', 'id')->onDelete('restrict');
            $table->foreignId('pasien_id')->constrained('pasiens', 'id')->onDelete('restrict');
            $table->foreignId('alat_id')->constrained('alat__kesehatans', 'id')->onDelete('restrict');
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
