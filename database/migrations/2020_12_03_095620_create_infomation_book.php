<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfomationBook extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_info', function (Blueprint $table) {
        $table->bigIncrements('book_id ');
        $table->string('book_name ');
        $table->string('description');
        $table->string('price');
        $table->string('img');
        $table->string('pub_id ');
        $table->string('cat_id ');
        $table->string('promotion_price');
        $table->string('totall_sell');
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
        Schema::dropIfExists('infomation_book');
    }
}
