<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('books', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            // slug VARCHAR
            $table->string('slug');

            // title VARCHAR
            $table->string('title');

            // author VARCHAR
            $table->string('author');

            // published_year SMALLINT - changed from TINYINT
            $table->smallInteger('published_year');

            // cover_url VARCHAR
            $table->string('cover_url');

            // info_url VARCHAR
            $table->string('info_url');

            // purchase_url VARCHAR
            $table->string('purchase_url');

            // description TEXT - can make ->nullable(); if I wanted as professor does in vid 8,5,17:15
            $table->text('description');

        });
    }

    /**
     * Reverse the migrations. 
     * WHY is my return void blue instead of green commented out??
     * @return void
     */

    public function down()
    {
        Schema::dropIfExists('books');
    }
}
