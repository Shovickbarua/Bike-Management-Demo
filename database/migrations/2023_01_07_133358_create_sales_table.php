<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string("invoiceId");
<<<<<<< HEAD
            $table->string("cus_name");
            $table->string("product_name");
            $table->string("cat_name");
            $table->string("address");
=======
            $table->string("cus_name")->nullable();
            $table->string("product_name");
            $table->string("cat_name");
            $table->string("address")->nullable();
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
            $table->string("cost");
            $table->string("SKU");
            $table->string("sale");
            $table->integer("method_id");
            $table->string("pro_quantity");
            $table->date("dob");
<<<<<<< HEAD
            $table->string("contact");
=======
            $table->string("contact")->nullable();
>>>>>>> c1b1bb4f7cececa3c914f07d81f64a9466d4c6c1
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
        Schema::dropIfExists('sales');
    }
}
