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
        Schema::create('penempatans', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("siswa_id")->nullable()->foreignId();
            $table->unsignedBigInteger("kelas_id")->nullable()->foreignId();
            $table->unsignedBigInteger("tahun_ajaran_id")->nullable()->foreignId();
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
        Schema::dropIfExists('penempatans');
    }
};
