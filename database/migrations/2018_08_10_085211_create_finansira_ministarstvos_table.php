<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\FinansiraMinistarstvo;

class CreateFinansiraMinistarstvosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finansira_ministarstvos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('projekat')->nullable();
            $table->string('organizacija')->nullable();
            $table->string('referent')->nullable();
            $table->string('trajanje')->nullable();
            $table->string('rukovodilac')->nullable();
            $table->string('pozicija')->nullable();
            $table->integer('meseci')->nullable();
            $table->text('redno')->nullable();
            $table->text('rednoU')->nullable();
            $table->text('rednoD')->nullable();
            $table->text('rednoT')->nullable();
            $table->text('rednoK')->nullable();
            $table->text('rednoC')->nullable();
            $table->text('rednoS')->nullable();
            $table->text('rednoE')->nullable();
            $table->text('rednoO')->nullable();
            $table->text('rednoN')->nullable();
            $table->integer('user_id');
            $table->timestamps();
        });
        // Schema::table('spisaks',function(Blueprint $table){
        //     $table->foreign('finansira_ministarstvos_id')
        //     ->references('id')
        //     ->on('finansira_ministarstvos')
        //     ->onUpdate('cascade')
        //     ->onDelete('cascade');

        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('finansira_ministarstvos');
    }
}
