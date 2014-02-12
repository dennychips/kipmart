<?php 

class RelationshipSeeder extends Seeder {
	public function run() {
		DB::table('user_relationships')->truncate();
		$faker = Faker\Factory::create('en_US');
		$faker->addProvider(new Faker\Provider\Base($faker));

		for($x=0;$x<100;$x++)
		UserRelationship::create([
				'user_id' => $faker->unique($reset = true)->randomDigit(1, 10),
				'followed_id' => $faker->unique($reset = true)->randomNumber(1, 10)
			]);
	}
}