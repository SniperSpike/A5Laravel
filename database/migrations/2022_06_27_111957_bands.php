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
        Schema::create('bands', function(Blueprint $table) {
            $table->id();
            $table->string('bandnaam');
            $table->text('biografie');
            $table->string('tekstkleur');
            $table->string('achtergrondkleur');
            $table->string('url1');
            $table->string('url2');
            $table->string('url3');
            $table->binary('banner');
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
         Schema::drop('bands');
    }
};
