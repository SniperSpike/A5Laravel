<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *6
     * @return void
     */
    public function up()
    {
        Schema::create('beheer', function (Blueprint $table) {
            $table->id('id');
            $table->integer('band_id');
            $table->integer('user_id');
            $table->boolean('eigenaar')->default(0);
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
        Schema::drop('beheer');
    }
};
