<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration {

        /**
         * Run the migrations.
         */
        public function up()
        {
        	
        Schema::create('entries', function(Blueprint $t) {
          $t->increments('id');
          $t->string('username')->nullable();
          $t->string('email')->nullable();
          $t->text('comment')->nullable();
          $t->timestamps();
        });
        }

        /**
         * Reverse the migrations.
         */
        public function down()
        {
                Schema::drop('entries');
        }
}
