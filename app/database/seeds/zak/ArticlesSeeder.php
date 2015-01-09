<?php
class ArticlesSeeder extends Seeder {
	
	public function run() {

		// clear our database ------------------------------------------
		DB::table('articles')->delete();
		
		// seed our bears table -----------------------
		// we'll create three different bears

		// bear 1 is named Lawly. She is extremely dangerous. Especially when hungry.
		Articles::create(array(
			'titre'=>'Faits Divers',
			'auteurs'=>'Zakaria',
			'corps'=> 4,
		));
			
		$this->command->info('Une presse libre!');

		
		

	}

}