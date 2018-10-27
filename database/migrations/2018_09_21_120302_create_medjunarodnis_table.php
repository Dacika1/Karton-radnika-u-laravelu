<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMedjunarodnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medjunarodnis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('proje')->nullable();
            $table->text('kratak')->nullable();
            $table->string('organ')->nullable();
            $table->string('refere')->nullable();
            $table->string('traja')->nullable();
            $table->string('rukovo')->nullable();
            $table->string('pozici')->nullable();
            $table->integer('mesec')->nullable();
            $table->text('radno')->nullable();
            $table->text('radnoU')->nullable();
            $table->text('radnoD')->nullable();
            $table->text('radnoT')->nullable();
            $table->text('radnoK')->nullable();
            $table->text('radnoC')->nullable();
            $table->text('radnoS')->nullable();
            $table->text('radnoE')->nullable();
            $table->text('radnoO')->nullable();
            $table->text('radnoN')->nullable();
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
        Schema::dropIfExists('medjunarodnis');
    }
}
