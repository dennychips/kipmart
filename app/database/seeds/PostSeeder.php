<?php 

class PostSeeder extends Seeder {
	public function run() {
		DB::table('posts')->truncate();
		
		$faker = Faker\Factory::create('en_US');
		$faker->addProvider(new Faker\Provider\Base($faker));
		$faker->addProvider(new Faker\Provider\Image($faker));
		$faker->addProvider(new Faker\Provider\Lorem($faker));
		$user = User::all();
		for($i=0;$i<10000;$i++) {
			
			Post::create([
					'user_id' => rand(1, 1000),
					'message' => $faker->sentence($nbWords = 10),
					// 'picture' => 'image.png'
				]);
		}
	}
}