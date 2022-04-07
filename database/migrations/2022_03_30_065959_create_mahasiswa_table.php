<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMahasiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nim', 10)->index();
            $table->string('nama', 50)->index();
            $table->string('kelas', 5);
            $table->string('jurusan', 35);
            //menambahkan 3 kolom 
            //  $table->string('email', 100);
            //  $table->string('alamat', 25);
            //  $table->date('tanggal_lahir');
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
        Schema::dropIfExists('mahasiswa');
    }
}
