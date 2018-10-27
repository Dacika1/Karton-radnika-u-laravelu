<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Saradnja;

class CreateSaradnjasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('saradnjas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('opis')->nullable();
            $table->string('odDo')->nullable();
            $table->string('saradjivao')->nullable();
            $table->integer('bro')->nullable();
            $table->integer('ukupno')->nullable();
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
        Schema::dropIfExists('saradnjas');
    }
}
