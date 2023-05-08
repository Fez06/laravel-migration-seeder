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
            $table->string('company',20);
            $table->string('departure_station',30);
            $table->string('arrival_station',30);
            $table->float('departure_time', 4,2); /* dateTime sarebbe stato meglio*/
            $table->float('arrival_time', 4,2);
            $table->smallInteger('train_code');    /* poteva essere string */
            $table->tinyInteger('coaches')->default(1);
            $table->boolean('on_time')->default(true);
            $table->boolean('cancelled')->default(false);
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
