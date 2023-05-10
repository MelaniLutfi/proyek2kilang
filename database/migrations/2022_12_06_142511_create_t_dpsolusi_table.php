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
        Schema::create('t_dpsolusi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_penyakit');
            $table->foreign('id_penyakit')->references('id')->on('t_penyakit')->onDelete('restrict');
            $table->unsignedBigInteger('id_solusi');
            $table->foreign('id_solusi')->references('id')->on('t_solusi')->onDelete('restrict');
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
        Schema::dropIfExists('t_dpsolusi');
    }
};
