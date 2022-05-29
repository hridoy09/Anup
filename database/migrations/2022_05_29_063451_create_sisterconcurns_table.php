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
        Schema::create('sisterconcurns', function (Blueprint $table) {
            $table->id();
            $table->string('banner_img');
            $table->string('name');
            $table->string('about_us');
            $table->string('logo_img');
            $table->string('side_img');
            $table->integer('phone');
            $table->string('email');
            $table->string('factory-address');
            $table->integer("status")->default("1");
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
        Schema::dropIfExists('sisterconcurns');
    }
};
