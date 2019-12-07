<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceProsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('service_pros', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('s_name');
            $table->string('logo');
            $table->string('email');
            $table->string('p_name');
            $table->string('qualification');
            $table->string('description');
            $table->smallInteger('min_price');
            $table->string('tool');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('phone');
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
        Schema::dropIfExists('service_pros');
    }
}
