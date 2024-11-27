<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('musicien_id');
            $table->string('path'); // Chemin de la photo
            $table->timestamps();

            // Définir une clé étrangère qui pointe vers la table musiciens
            $table->foreign('musicien_id')->references('id')->on('musiciens')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('photos');
    }
}
