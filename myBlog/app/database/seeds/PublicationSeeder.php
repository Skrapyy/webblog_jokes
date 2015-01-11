<?php
class PublicationSeeder extends Seeder {
	
	public function run() {
		DB::table('publication')->delete();

		Publication::create(array(
			'title'=>'Femme/Ouragan',
			'author'=>'Kevin',
			'text'=>'Quel est le point commun entre une femme et un ouragan ? Elles arrivent chaudes et mouillées, et repartent avec ta maison et ta voiture !',
		));
	}
}