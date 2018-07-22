<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignBillsToCategories extends Migration
{
    public function up()
    {
        Schema::table('bills', function (Blueprint $table) {
            $table->unsignedInteger('categoryId');
            $table->foreign('categoryId')->references('id')->on('categories');
        });
    }

    public function down()
    {
        Schema::table('bills', function (Blueprint $table) {

        });
    }
}
