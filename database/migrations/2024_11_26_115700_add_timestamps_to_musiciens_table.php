<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTimestampsToMusiciensTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('musiciens', function (Blueprint $table) {
            $table->timestamps(); // Ajoute created_at et updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('musiciens', function (Blueprint $table) {
            $table->dropTimestamps(); // Supprime created_at et updated_at
        });
    }
}
