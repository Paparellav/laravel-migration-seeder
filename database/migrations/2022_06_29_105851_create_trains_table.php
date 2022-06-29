<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('Azienda', 50);
            $table->string('Stazione_di_partenza', 50);
            $table->unsignedInteger('Codice_treno');
            $table->unsignedTinyInteger('Numero_carrozza');
            $table->boolean('In_orario')->default(true);
            $table->boolean('Arrivato')->default(true);
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('trains');
    }
}
