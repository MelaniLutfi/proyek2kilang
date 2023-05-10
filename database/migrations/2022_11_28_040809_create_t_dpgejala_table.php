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
        Schema::create('t_dpgejala', function (Blueprint $table) {
            $table->unsignedBigInteger('id_penyakit');
            $table->foreign('id_penyakit')->references('id')->on('t_penyakit')->onDelete('restrict');
            $table->unsignedBigInteger('id_gejala');
            $table->foreign('id_gejala')->references('id')->on('t_gejala')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_dpgejala');
    }
};
