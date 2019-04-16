<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('username');
            $table->string('phone');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();;
            $table->string('password');
            $table->string('country')->nullable();
            $table->string('flag')->nullable();
            $table->string('avatar')->nullable();
            $table->text('bio')->nullable();
            $table->string('dob')->nullable();
            $table->text('education')->nullable();
            $table->text('awards')->nullable();
            $table->text('experience')->nullable();
            $table->text('exhibitions')->nullable();
            $table->text('mentors')->nullable();
            $table->enum('status', array(0, 1))->default(0)->nullable();
            $table->string('admin_control')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('vendors');
    }
}
