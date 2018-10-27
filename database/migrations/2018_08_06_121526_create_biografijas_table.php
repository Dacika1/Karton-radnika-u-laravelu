<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Biografija;

class CreateBiografijasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('biografijas', function (Blueprint $table) {
            $table->increments('id');
            $table->text('kretanje')->nullable();
            $table->text('angazovanje')->nullable();
            $table->date('clanstvo')->nullable();
            $table->mediumText('sanu')->nullable();
            $table->text('ostalo')->nullable();
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
        Schema::dropIfExists('biografijas');
    }
}
