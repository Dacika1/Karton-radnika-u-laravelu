<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use App\Podaci;

class CreatePodacisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('podacis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('prezime')->nullable();
            $table->string('ime')->nullable();
            $table->string('imeJednogRoditelja')->nullable();
            $table->string('JMBG')->nullable();
            $table->date('datumRodenja')->format('d-m-Y')->nullable();
            $table->string('mestoRodenja')->nullable();
            $table->string('drzavaRodenja')->nullable();
            $table->string('drzavljanstvo')->nullable();
            $table->string('adresaStanovanja')->nullable();
            $table->string('zvanje')->nullable();
            $table->string('akademskoZvanje')->nullable();
            $table->string('email')->nullable();
            $table->string('telNaPoslu')->nullable();
            $table->string('mob')->nullable();
            $table->string('ustanovaPunoZaposlenje')->nullable();
            $table->string('ustanovaDodatna')->nullable();
            $table->string('radnoMesto')->nullable();
            $table->string('godinaZaposlenja')->nullable();
            $table->integer('ukupanStaz')->nullable();
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
        Schema::dropIfExists('podacis');
    }
}
