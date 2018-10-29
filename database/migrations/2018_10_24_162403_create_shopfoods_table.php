<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShopfoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shopfoods', function (Blueprint $table) {
            $table->increments('id');
            $table->string('shopfood_name')->unique();
            $table->string('shopfood_slug')->unique();
            $table->string('shopfood_title');
            $table->string('shopfood_content');
            $table->string('shopfood_address');
            $table->integer('shopfood_active')->default(0);
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
        Schema::dropIfExists('shopfoods');
    }
}
