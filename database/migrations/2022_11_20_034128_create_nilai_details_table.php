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
        Schema::create('nilai_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("siswa_id")->nullable()->foreignId();
            $table->unsignedBigInteger("nilai_id")->nullable()->foreignId();
            $table->integer("uts");
            $table->integer("tugas");
            $table->integer("uas");
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
        Schema::dropIfExists('nilai_details');
    }
};
