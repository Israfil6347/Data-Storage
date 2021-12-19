<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_professionals', function (Blueprint $table) {
            $table->id();
            $table->string('j_date')->nullable();
            $table->string('r_date')->nullable('continue');
            $table->string('C_name')->nullable();
            $table->string('y_degination')->nullable();
            $table->string('v_card')->nullable();
            $table->string('image')->nullable();
            $table->string('resp')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('add_professionals');
    }
}
