<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Nastavni;

class CreateNastavnisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nastavnis', function (Blueprint $table) {
            $table->increments('id');
            $table->text('oblast')->nullable();
            $table->integer('ruko')->nullable();
            $table->text('izvodjenje')->nullable();
            $table->integer('ucesce')->nullable();
            $table->text('udzbenik')->nullable();
            $table->text('druga')->nullable();
            $table->text('mislenje')->nullable();
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
        Schema::dropIfExists('nastavnis');
    }
}
