<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Jezik;

class CreateJeziksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jeziks', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('rBr')->nullable();
            $table->string('strani')->nullable();
            $table->string('cita')->nullable();
            $table->string('pise')->nullable();
            $table->string('govori')->nullable();
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
        Schema::dropIfExists('jeziks');
    }
}
