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
        Schema::create('t_diagnosa', function (Blueprint $table) {
            $table->string('id',32)->primary();
            $table->string('pasien_id');
            $table->string('kode_penyakit', 5);
            $table->string('tanggal_konsultasi');
            $table->softDeletes();
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
        Schema::dropIfExists('t_diagnosa');
    }
};
