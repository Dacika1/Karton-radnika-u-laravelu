<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Magistarske;

class CreateMagistarskesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('magistarskes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('up')->nullable();
            $table->string('po')->nullable();
            $table->string('sta')->nullable();
            $table->string('vi')->nullable();
            $table->string('ma')->nullable();
            $table->string('st')->nullable();
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
        Schema::dropIfExists('magistarskes');
    }
}
