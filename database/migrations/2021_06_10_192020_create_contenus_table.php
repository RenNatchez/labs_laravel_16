<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contenus', function (Blueprint $table) {
            $table->id();
            $table->string('titre_1',125);
            $table->string('titre_2',125);
            $table->string('titre_3',125);
            $table->string('titre_4',125);
            $table->string('titre_5',125);
            $table->string('titre_6',125);
            $table->string('titre_7',125);
            $table->string('description_1',360);
            $table->string('description_2',360);
            $table->string('description_3',100);
            $table->string('contact_titre',25);
            $table->string('contact_description',250);
            $table->string('contact_soustitre',25);
            $table->string('contact_rue',100);
            $table->string('contact_ville',100);
            $table->string('contact_telephone',25);
            $table->string('contact_email',100);
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
        Schema::dropIfExists('contenus');
    }
}
