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
        Schema::create('t_datapasien' , function(Blueprint $table){
            $table->id();
            $table->String('nama' , 150)->required();
            $table->date('tanggal_lahir')->required();
            $table->String('email' , 150);
            $table->string('no_telp', 20);
            $table->string('jenis_kelamin', 10)->required();
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
        //
    }
};
