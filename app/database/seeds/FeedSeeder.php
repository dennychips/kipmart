<?php 

class FeedSeeder extends Seeder {
	public function run(){
		DB::table('feeds')->truncate();
		$faker = Faker\Factory::create('en_US');
		$faker->addProvider(new Faker\Provider\Base($faker));
		for($x=0;$x<1000;$x++){
			Feed::create([
					'post_id' => $faker->unique($reset = true)->randomNumber(1, 100),
					'sender_id' => $faker->unique($reset = true)->randomNumber(1, 10)
				]);
		}
	}
}