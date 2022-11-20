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
        Schema::create('nilais', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("kelas_id")->nullable()->foreignId();
            $table->unsignedBigInteger("mata_pelajaran_id")->nullable()->foreignId();
            $table->unsignedBigInteger("tahun_ajaran_id")->nullable()->foreignId();
            $table->enum("semester",["Semester 1","Semester 2"]);
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
        Schema::dropIfExists('nilais');
    }
};
