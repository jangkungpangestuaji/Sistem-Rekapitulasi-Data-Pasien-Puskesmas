<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveilans2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveilans_2', function (Blueprint $table) {
            $table->increments('id_surveilens2');
            $table->integer('identitas_penyakit_id')->unsigned();
            $table->string('nama_penyakit');
            $table->string('pria', 10);
            $table->string('wanita', 10);
            $table->string('total_kunjungan', 10);
            $table->timestamps();

            $table->foreign('identitas_penyakit_id')->references('id_identitas_penyakit')->on('identitas_penyakit');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveilans_2');
    }
}
