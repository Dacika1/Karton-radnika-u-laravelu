<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Poslediplomske;

class CreatePoslediplomskesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poslediplomskes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('god')->nullable();
            $table->string('place')->nullable();
            $table->string('steit')->nullable();
            $table->string('viseskolska')->nullable();
            $table->string('speciRad')->nullable();
            $table->string('strucniNaziv')->nullable();
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
        Schema::dropIfExists('poslediplomskes');
    }
}
