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
        Schema::create('penugasan', function (Blueprint $table) {
            $table->id();
            $table->string('nama_petugas');
            $table->bigInteger('id_bagian');
            $table->timestamps();
        });

        // Schema::table('penugasan', function (Blueprint $table) {
        //     $table->foreign('ruanglingkup_id')->references('id')->on('ruang_lingkup');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('penugasan');
    }
};
