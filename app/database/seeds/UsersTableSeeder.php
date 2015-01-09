<?php
class UsersTableSeeder extends Seeder {
	
	public function run() {

	DB::table('users')->insert(array(

	array('username' => 'admin@sucresalee.fr','password' => Hash::make('sucresalee')),

    ));
    
	}

}