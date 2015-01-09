<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Eloquent::unguard();
		
		 $this->call('EntriesTableSeeder');
		 $this->call('UsersTableSeeder');


		 //$this->call('ArticlesSeeder');
		 //$this->call('UsersSeeder');
		 //$this->call('CommentsSeeder');
	}

}
