<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateAddDoctorVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('add_doctor_visits', function (Blueprint $table) {
            $table->id();
            $table->string('v_date')->nullable();
            $table->string('h_name')->nullable();
            $table->string('d_name')->nullable();
            $table->string('d_degination')->nullable();
            $table->string('v_card')->nullable();
            $table->string('v_purpose')->nullable();
            $table->string('description')->nullable();
            $table->string('image')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('add_doctor_visits');
    }
}
