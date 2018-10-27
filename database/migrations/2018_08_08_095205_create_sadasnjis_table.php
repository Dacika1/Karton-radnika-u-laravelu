<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Sadasnji;

class CreateSadasnjisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sadasnjis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('predmet')->nullable();
            $table->string('studija')->nullable();
            $table->string('fond')->nullable();
            $table->string('nivo')->nullable();
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
        Schema::dropIfExists('sadasnjis');
    }
}
