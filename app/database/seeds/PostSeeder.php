<?php 

class PostSeeder extends Seeder {
	public function run() {
		DB::table('posts')->truncate();
		
		$faker = Faker\Factory::create('en_US');
		$faker->addProvider(new Faker\Provider\Base($faker));
		$faker->addProvider(new Faker\Provider\Image($faker));
		$faker->addProvider(new Faker\Provider\Lorem($faker));

		for($i=0;$i<100;$i++) {
			Post::create([
					'user_id' => $faker->unique($reset = true)->randomNumber(1, 10),
					'message' => $faker->sentence($nbWords = 10),
					'picture' => 'image.png'
				]);
		}
	}
}