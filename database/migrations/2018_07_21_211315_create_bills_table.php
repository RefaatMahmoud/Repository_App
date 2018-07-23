<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBillsTable extends Migration
{
    public function up()
    {
        Schema::create('bills', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('total');
            $table->integer('requestedQuantity');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bills');
    }
}
