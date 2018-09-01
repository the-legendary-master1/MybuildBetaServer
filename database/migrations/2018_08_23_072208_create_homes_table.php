<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('homes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('how_it_works_title');
            $table->string('strap_line');
            $table->string('how_it_works_items');
            $table->string('how_it_works_link');
            $table->string('blog_title');
            $table->string('featured_blogs');
            $table->string('blog_link');
            $table->string('story_title');
            $table->string('stories');
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
        Schema::dropIfExists('homes');
    }
}
