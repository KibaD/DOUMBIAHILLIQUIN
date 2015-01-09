<?php
class EntriesTableSeeder extends Seeder {
	
	public function run() {

		// clear our database ------------------------------------------
		DB::table('entries')->delete();
		
		// seed our bears table -----------------------
		// we'll create three different bears

		// bear 1 is named Lawly. She is extremely dangerous. Especially when hungry.
			 entries::create(array(
			'username'=>'MAROUAN',
			'email'=> 'marouan.zakaria@gmail.com',
			'comment'=> 'BILBO',
		));
			

		
		

	}

}