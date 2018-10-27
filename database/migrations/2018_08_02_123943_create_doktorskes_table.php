<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Doktorske;

class CreateDoktorskesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doktorskes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('datumOdbrane')->format('d-m-Y')->nullable();
            $table->string('cita')->nullable();
            $table->string('republika')->nullable();
            $table->string('scuola')->nullable();
            $table->string('doktorskaDisertacija')->nullable();
            $table->string('oblast')->nullable();
            $table->string('steceni')->nullable();
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
        Schema::dropIfExists('doktorskes');
    }
}
