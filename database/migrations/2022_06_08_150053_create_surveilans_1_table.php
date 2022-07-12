<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveilans1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveilans_1', function (Blueprint $table) {
            $table->increments('id_surveilens1');
            $table->string('id_register')->index();
            $table->string('nama_pasien');
            $table->string('umur', 10);
            $table->date('tanggal');
            $table->text('diagnosa');
            $table->timestamps();

            $table->foreign('id_register')->references('id_register')->on('identitas_pasien');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('surveilans_1');
    }
}
