<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBikesalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bikesales', function (Blueprint $table) {
            $table->id();
            $table->string("invoiceId");
            $table->string("client_name");
            $table->string("fName");
            $table->string("nid");
            $table->integer("method_id");
            $table->date("dob");
            $table->string("contact");
            $table->string("address");
            $table->string("brand");
            $table->string("bike_name");
            $table->string("bsquantity");
            $table->string("engine_no");
            $table->string("chas_no");
            $table->string("m_veh");
            $table->string("manu");
            $table->string("cc");
            $table->string("seat_cap");
            $table->string("brake");
<<<<<<< HEAD
            $table->string("tyre");
=======
            $table->string("ftyre");
            $table->string("rtyre");
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
            $table->string("color");
            $table->string("weight");
            $table->string("sale_price");
            $table->string("registration");
            $table->string("bank_draft");
            $table->string("brta");
            $table->string("profit");
            $table->string("total");
<<<<<<< HEAD
=======
            $table->string("cus_photo");
            $table->string("b_copy");
            $table->string("r_slip");
            $table->string("t_token");
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
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
        Schema::dropIfExists('bikesales');
    }
}
