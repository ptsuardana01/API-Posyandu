<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Null_;

class DbSetup extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kaders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 255);
            $table->string('nik', 16)->unique();
            $table->string('kd_kader', 10)->unique();
            $table->string('tmpt_lahir', 100);
            $table->date('tgl_lahir', 100);
            $table->text('alamat', 255);
            $table->string('telp', 15);
            $table->string('email', 100);
            $table->timestamps();
        });


        Schema::create('ortus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_ayah', 255);
            $table->string('nama_ibu', 255);
            $table->string('nik_ayah', 16)->unique();
            $table->string('nik_ibu', 16)->unique();
            $table->string('tmpt_lahir_ayah', 100);
            $table->string('tmpt_lahir_ibu', 100);
            $table->date('tgl_lahir_ayah', 50);
            $table->date('tgl_lahir_ibu', 50);
            $table->text('alamat', 255);
            $table->string('telp', 15);
            $table->boolean('stts_kehamilan');
            $table->boolean('stts_bumil');
            $table->date('tgl_meninggal')->nullable();
            $table->unsignedBigInteger('id_kader_bumil');
            $table->timestamps();

            $table->foreign('id_kader_bumil')->references('id')->on('kaders')
            ->onUpdate('cascade')->onDelete('cascade');

        });

        Schema::create('balitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 255);
            $table->string('tmpt_lahir', 100);
            $table->date('tgl_lahir', 100);
            $table->boolean('stts_balita');
            $table->date('tgl_meninggal')->nullable();
            $table->unsignedBigInteger('id_kader_balita');
            $table->unsignedBigInteger('id_ortu');
            $table->timestamps();

            $table->foreign('id_kader_balita')->references('id')->on('kaders')
            ->onUpdate('cascade')->onDelete('cascade');

            $table->foreign('id_ortu')->references('id')->on('ortus')
            ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('pemeriksaan_bumils', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tb');
            $table->integer('bb');
            $table->integer('lila');
            $table->unsignedBigInteger('id_bumil');
            $table->timestamps();

            $table->foreign('id_bumil')->references('id')->on('ortus')
            ->onUpdate('cascade')->onDelete('cascade');
        });

        Schema::create('pemeriksaan_balitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tb');
            $table->integer('bb');
            $table->integer('lk');
            $table->unsignedBigInteger('id_balita');
            $table->timestamps();

            $table->foreign('id_balita')->references('id')->on('balitas')
            ->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kaders');
        Schema::dropIfExists('ortus');
        Schema::dropIfExists('balitas');
        Schema::dropIfExists('pemeriksaan_bumils');
        Schema::dropIfExists('pemeriksaan_balitas');
    }
}
