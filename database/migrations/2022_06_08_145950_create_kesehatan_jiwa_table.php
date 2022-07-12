<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKesehatanJiwaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesehatan_jiwa', function (Blueprint $table) {

            $table->engine = 'InnoDB';
            $table->increments('id_kesehatan_jiwa');
            $table->string('id_register');
            $table->integer('pasien_id')->unsigned();
            $table->string('nama_pasien');
            $table->string('nik', 16);
            $table->date('tanggal_lahir');
            $table->text('alamat');
            $table->string('jenis_kelamin');
            $table->string('no_bpjs', 15);
            $table->string('kepala_keluarga');
            $table->string('pendidikan');
            $table->string('pekerjaan');
            $table->date('tanggal_kunjungan');
            $table->string('kunjungan');
            $table->text('diagnosa');
            $table->text('terapi');
            $table->text('dosis');
            $table->text('keterangan');
            $table->timestamps();

            $table->foreign('pasien_id')->references('id_pasien')->on('identitas_pasien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kesehatan_jiwa');
    }
}
