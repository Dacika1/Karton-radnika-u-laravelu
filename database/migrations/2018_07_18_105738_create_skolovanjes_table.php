<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Skolovanje;

class CreateSkolovanjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skolovanjes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gUpisa')->nullable();
            $table->string('mesto')->nullable();
            $table->string('drzava')->nullable();
            $table->string('ustanova')->nullable();
            $table->string('rad')->nullable();
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
        Schema::dropIfExists('skolovanjes');
    }
}
