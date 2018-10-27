<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCasopisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('casopis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naslov')->nullable();
            $table->integer('anno')->nullable();
            $table->string('mese')->nullable();
            $table->integer('volumen')->nullable();
            $table->integer('numero')->nullable();
            $table->integer('pNumero')->nullable();
            $table->integer('uNumero')->nullable();
            $table->string('doi')->nullable();
            $table->string('udc')->nullable();
            $table->string('kljuc')->nullable();
            $table->text('apstrakt')->nullable();
            $table->string('veb')->nullable();
            $table->boolean('verified')->default(false);
            $table->integer('user_id');
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
        Schema::dropIfExists('casopis');
    }
}