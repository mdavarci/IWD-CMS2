<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
       public function up()
    {
          Schema::create('menu_user', function (Blueprint $table) {
            // $table->increments('id');

            $table->unsignedinteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedinteger('menu_id');
            $table->foreign('menu_id')->references('id')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('menu_user');
    }
}
