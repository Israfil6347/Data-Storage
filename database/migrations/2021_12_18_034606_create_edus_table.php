<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEdusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('edus', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('i_name')->nullable();
            $table->string('department')->nullable();
            $table->string('pass_year')->nullable();
            $table->string('role')->nullable();
            $table->string('register')->nullable();
            $table->string('r_card')->nullable();
            $table->string('markset')->nullable();
            $table->string('certificate')->nullable();
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
        Schema::dropIfExists('edus');
    }
}
