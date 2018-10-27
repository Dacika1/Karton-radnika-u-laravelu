<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Boravci;

class CreateBoravcisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boravcis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('organiz')->nullable();
            $table->integer('anno')->nullable();
            $table->string('trajanje')->nullable();
            $table->string('luogo')->nullable();
            $table->string('paese')->nullable();
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
        Schema::dropIfExists('boravcis');
    }
}
