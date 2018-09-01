<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHeaderFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('header_footers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('parent_name');
            $table->string('display_nav');
            $table->string('logo');
            $table->string('display_footer_one');
            $table->string('favicon');
            $table->string('display_footer_two');
            $table->string('footer_column_names');
            $table->string('display_footer_three');
            $table->string('display_footer_four');
            $table->string('display_footer_bottom');
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
        Schema::dropIfExists('header_footers');
    }
}
