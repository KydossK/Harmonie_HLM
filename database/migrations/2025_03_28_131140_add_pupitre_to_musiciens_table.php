<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('musiciens', function (Blueprint $table) {
        $table->string('pupitre')->nullable()->after('nom'); // adapte si besoin
    });
}

public function down()
{
    Schema::table('musiciens', function (Blueprint $table) {
        $table->dropColumn('pupitre');
    });
}

};
