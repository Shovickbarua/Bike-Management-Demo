<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikes', function (Blueprint $table) {
            $table->id();
            $table->string("brand");
            $table->string("bike_name");
            $table->string("bquantity");
            $table->date("dob");
            $table->string("bcost");
            $table->string("color");
            $table->string("engine_no");
            $table->string("chas_no");
            $table->string("m_veh");
            $table->string("manu");
            $table->string("cc");
            $table->string("seat_cap");
            $table->string("brake");
            $table->string("ftyre");
            $table->string("rtyre");
            $table->string("weight");
            $table->string("image");
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
        Schema::dropIfExists('bikes');
    }
}
