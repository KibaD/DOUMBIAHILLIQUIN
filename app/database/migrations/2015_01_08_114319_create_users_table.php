<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
 
class CreateUsersTable extends Migration {
 
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
      Schema::create('users', function($t) {
          $t->increments('id');
          $t->string('username', 128)->unique();
          $t->string('password', 64);
          $t->string('remember_token', 100)->nullable();
      });
  }
 
  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
      Schema::drop('users');
  }
 
}