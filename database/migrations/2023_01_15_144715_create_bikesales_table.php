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
            $table->integer("method_id");
            $table->date("dob");
            $table->string("contact");
            $table->string("address");
            $table->string("bike_name");
            $table->string("bsquantity");
            $table->string("engine_no");
            $table->string("chas_no");
            $table->string("sale_price");
            $table->string("registration");
            $table->string("bank_draft");
            $table->string("brta");
            $table->string("profit");
            $table->string("total");
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
