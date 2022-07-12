<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerkesmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perkesmas', function (Blueprint $table) {
            $table->increments('id_perkesmas');
            $table->string('id_register');
            $table->integer('pasien_id')->unsigned();
            $table->string('nama_pasien');
            $table->string('nik', 16);
            $table->date('tanggal_lahir');
            $table->string('jenis_kelamin');
            $table->text('alamat');
            $table->string('no_bpjs', 15);
            $table->string('kepala_keluarga');
            $table->string('pendidikan');
            $table->date('tanggal_kunjungan');
            $table->text('intervensi_keperawatan');
            $table->text('diagnosa_keperawatan');
            $table->text('implementasi_keperawatan');
            $table->string('kunjungan');
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
        Schema::dropIfExists('perkesmas');
    }
}
