<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Odrzavanje;

class CreateOdrzavanjesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('odrzavanjes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nastave')->nullable();
            $table->string('semestar')->nullable();
            $table->string('fondi')->nullable();
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
        Schema::dropIfExists('odrzavanjes');
    }
}
