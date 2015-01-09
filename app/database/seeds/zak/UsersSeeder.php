<?php
class UsersSeeder extends Seeder {
	
	public function run() {

		// clear our database ------------------------------------------
		DB::table('users')->delete();
		
		// seed our bears table -----------------------
		// we'll create three different bears

		// bear 1 is named Lawly. She is extremely dangerous. Especially when hungry.
			 Users::create(array(
			'nom'=>'MAROUAN',
			'prenom'=>'Zakaria',
			'email'=> 'marouan.zakaria@gmail.com',
			'password'=> 'BILBO',
		));
			
		$this->command->info('Une presse libre!');

		
		

	}

}