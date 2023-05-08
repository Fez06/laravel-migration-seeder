<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda',20);
            $table->string('Stazione di partenza',30);
            $table->string('Stazione di arrivo',30);
            $table->float('Orario di partenza', 4,2); /* dateTime sarebbe stato meglio*/
            $table->float('Orario di arrivo', 4,2);
            $table->smallInteger('Codice Treno');    /* poteva essere string */
            $table->tinyInteger('Numero Carrozze')->default(1);
            $table->boolean('In orario');
            $table->boolean('Cancellato');
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
        Schema::dropIfExists('trains');
    }
};
