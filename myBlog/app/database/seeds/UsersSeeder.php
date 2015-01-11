<?php
class UsersSeeder extends Seeder {
	
	public function run() {
		DB::table('users')->delete();
			 Users::create(array(
			'fname'=>'Kevin',
			'name'=>'Matta',
			'email'=> 'kevinmatta@hotmail.fr',
			'password'=> 'root',
		));
	}
}