<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('artist');
            $table->float('price');
            $table->text('brief_description');
            $table->text('full_description');
            $table->text('dimension_description');
            $table->string('type');
            $table->string('support_type');
            $table->string('height');
            $table->string('width');
            $table->string('depth');
            $table->string('weight');
            $table->string('year_created');
            $table->enum('hangable', array(0, 1))->default(0);
            $table->enum('framed', array(0, 1))->default(0);
            $table->enum('signed', array(0, 1))->default(0);
            $table->enum('signature_location', array(0, 1))->default(0);
            
            $table->string('image_full')->nullable();
            $table->string('image_front')->nullable();
            $table->string('image_leftside')->nullable();
            $table->string('image_rightside')->nullable();
            $table->string('image_back')->nullable();
            $table->string('image_hanged')->nullable();
            $table->string('image_gallery')->nullable();
            $table->string('image_1')->nullable();
            $table->string('image_2')->nullable();
            $table->string('video')->nullable();
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
        Schema::dropIfExists('products');
    }
}
