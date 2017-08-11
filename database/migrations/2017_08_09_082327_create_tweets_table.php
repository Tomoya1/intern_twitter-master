<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTweetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('tweets', function (Blueprint $table){

            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('body');

            $table->timestamps();

        });


//        Schema::create('users', function (Blueprint $table) {
//            $table->increments('id');
//            $table->string('url_name')->unique();
//            $table->string('email')->unique();
//            $table->string('password');
//            $table->string('display_name')->nullable();
//            $table->string('description', 160)->nullable();
//            $table->string('avatar');
//            $table->rememberToken();
//            $table->timestamps();
//        });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        Schema::dropIfExists('tweets');

        //Schema::dropIfExists('users');


    }
}
