<?php 

class RelationshipSeeder extends Seeder {
	public function run() {
		DB::table('user_relationships')->truncate();
		$faker = Faker\Factory::create('en_US');
		$faker->addProvider(new Faker\Provider\Base($faker));


		for($x=0;$x<1000;$x++)
		UserRelationship::create([
				'user_id' => $faker->unique($reset = true)->randomDigit(1, 1000),
				'followed_id' => $faker->unique($reset = true)->randomNumber(1, 1000)
			]);
	}
}