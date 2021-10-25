<?php

use App\Models\Kolega;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKolegasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kolegas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('jenis_sampah_id');
            $table->string('nama_kolega');
            $table->string('slug');
            $table->text('deskripsi');
            $table->string('alamat');
            $table->string('no_hp');
            $table->string('sosial_media');
            $table->string('gambar');
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
        Schema::dropIfExists('kolegas');
    }
}
