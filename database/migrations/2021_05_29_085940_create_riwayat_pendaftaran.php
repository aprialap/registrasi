<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRiwayatPendaftaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_pendaftaran', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('no_rm')->nullable();
            $table->string('poli_id')->nullable();
            $table->string('dokter_id')->nullable();
            $table->string('tanggal_pendaftaran')->nullable();
            $table->string('status')->nullable();
            $table->string('no_antrian')->nullable();
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
        Schema::dropIfExists('riwayat_pendaftaran');
    }
}
