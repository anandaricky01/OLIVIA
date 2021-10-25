<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRiwayatAntarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('riwayat_antars', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->foreignId('jenis_sampah_id');
            $table->integer('berat');
            $table->string('alamat');
            $table->text('alamat_pengiriman');
            $table->text('deskripsi_alamat');
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
        Schema::dropIfExists('riwayat_antars');
    }
}
