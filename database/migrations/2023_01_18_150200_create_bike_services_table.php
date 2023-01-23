<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikeServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bike_services', function (Blueprint $table) {
            $table->id();
            $table->string("invoiceId");
            $table->string("client_name");
            $table->string("contact");
            $table->string("address");
            $table->string("bike_name");
            $table->string("bsquantity");
            $table->date("first_service");
            $table->date("second_service");
            $table->date("third_service");
            $table->date("fourth_service");
            $table->date("fifth_service");
            $table->date("sixth_service");
            $table->date("seventh_service");
            $table->date("eighth_service");
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
        Schema::dropIfExists('bike_services');
    }
}
