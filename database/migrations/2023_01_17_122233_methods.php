<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Methods extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('methods', function (Blueprint $table) {
            $table->id();
            $table->string("method_name");
            $table->timestamps();
        });
        DB::table('methods')->insert([
            [
                'method_name'          =>'Cash',
                'created_at'           => Carbon::now()   
            ], 
            [
                'method_name'          =>'Check',
                'created_at'           => Carbon::now()   
            ],
            [
                'method_name'          =>'Credit',
                'created_at'           => Carbon::now()   
            ],
           
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('methods');
    }
}
