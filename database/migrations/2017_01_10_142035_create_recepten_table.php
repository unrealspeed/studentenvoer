<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReceptenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recepten', function (Blueprint $table) {
            $table->increments('id');
            $table->string('recnaam');
            $table->string('recsoort');
            $table->string('ingredienten');
            $table->integer('kcal');
            $table->text('stappen');
            $table->timestamps();
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('recepten');
    }
}
