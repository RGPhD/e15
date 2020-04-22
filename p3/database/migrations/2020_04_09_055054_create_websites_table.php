<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('websites', function (Blueprint $table) {
    
            # Create a Primary, Auto-Incrementing column named `id`
            $table->bigIncrements('id');
    
            # This generates two columns: `created_at` and `updated_at` 
            # Laravel will manage these columns automatically
            $table->timestamps();
            
            $table->string('name');
            $table->string('website_url');
            $table->string('category');
            $table->string('slug');
            $table->string('organization');
            $table->string('website_image')->nullable();
            # Here I used a column modifier to specify this column can be left empty (null)
            # I also used website_image instead of just image, because I use image in css for different views (Put this in Instructor notes)
            $table->text('summary');
            $table->text('review')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('websites');
    }
}
