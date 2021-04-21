<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelDetailProperti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tabel_detail_properti', function (Blueprint $table) {
            $table->id('id');
            $table->string('umur_bangunan');
            $table->string('harga');
            $table->string('jml_kamartidur');
            $table->string('jml_kamarmandi');
            $table->string('luas_tanah');
            $table->string('luas_bangunan');
            $table->string('lantai');
            $table->string('daya_listrik');
            $table->string('tahun_bangunan');
            $table->text('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tabel_detail_properti');
    }
}
