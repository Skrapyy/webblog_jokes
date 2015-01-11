<?php
class CommentsSeeder extends Seeder {
	
	public function run() {
		DB::table('comments')->delete();

			 Comments::create(array(
			'title'=>'Femme/Ouragan',
			'author'=>'Lucas',
			'text'=>'Tu es trop drole',			
		));
	}
}