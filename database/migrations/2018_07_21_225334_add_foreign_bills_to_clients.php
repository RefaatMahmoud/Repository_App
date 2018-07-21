<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignBillsToClients extends Migration
{
    public function up()
    {
        Schema::table('bills', function (Blueprint $table) {
            $table->unsignedInteger('clientId');
            $table->foreign('clientId')->references('id')->on('clients');
        });
    }

    public function down()
    {
        Schema::table('bills', function (Blueprint $table) {

        });
    }
}
