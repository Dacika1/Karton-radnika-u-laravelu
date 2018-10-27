<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Izborno;

class CreateIzbornosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('izbornos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nastavno')->nullable();
            $table->date('data')->nullable()->format('d-m-Y');
            $table->string('oblast')->nullable();
            $table->string('grupa')->nullable();
            $table->string('discip')->nullable();
            $table->string('kljucne')->nullable();
            $table->integer('godina')->nullable();
            $table->double('ukupno')->nullable();
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
        Schema::dropIfExists('izbornos');
    }
}
