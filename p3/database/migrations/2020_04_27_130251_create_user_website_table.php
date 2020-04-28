<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWebsiteTable extends Migration
{
    public function up()
{
    Schema::create('user_website', function (Blueprint $table) {

        $table->bigIncrements('id');
        $table->timestamps();

        $table->bigInteger('website_id')->unsigned();
        $table->bigInteger('user_id')->unsigned();

        # Foreign keys
        $table->foreign('website_id')->references('id')->on('websites');
        $table->foreign('user_id')->references('id')->on('users');

        # User website review
        $table->text('my_review')->nullable();
    });
}

public function down()
{
    Schema::dropIfExists('user_website');
}

}
