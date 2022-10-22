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
        Schema::create('cranes', function (Blueprint $table) {
            $table->id();
            $table->string('model');
            $table->string('mark');
            $table->integer('tipe');
            $table->double('cargo_moment');
            $table->double('min_boom_length');
            $table->double('max_boom_length');
            $table->double('max_load_capacity');
            $table->double('end_load_capacity');
            $table->string('decription');
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
        Schema::dropIfExists('cranes');
    }
};
