<?php 

class UserSeeder extends Seeder {
	public function run() {
		DB::table('users')->truncate();
		User::create([
			'username' 	=> 'admin',
			'firstname' => 'Admin',
			'lastname'	=> 'Web',
			'email'		=> 'admin@market.com',
			'password'	=> Hash::make('password'),
			'birthdate'	=> '1980-02-03',
			'description'	=> 'Lorem Ipsum',
			'admin'	=> true
		]);
		User::create([
			'username' 	=> 'denipermana',
			'firstname' => 'Deni',
			'lastname'	=> 'Permana',
			'email'		=> 'deni@duniakreatif.com',
			'password'	=> Hash::make('password'),
			'birthdate'	=> '1983-01-06',
			'description'	=> 'Lorem Ipsum',
			'admin'	=> false
		]);

		$faker = Faker\Factory::create('en_US');
		$faker->addProvider(new Faker\Provider\en_US\Address($faker));
		$faker->addProvider(new Faker\Provider\DateTime($faker));
		$faker->addProvider(new Faker\Provider\Base($faker));
		$faker->addProvider(new Faker\Provider\en_US\Company($faker));
		$faker->addProvider(new Faker\Provider\Internet($faker));
		$faker->addProvider(new Faker\Provider\Lorem($faker));

		for($x=0;$x<10;$x++){
			User::create([
				'username' 	=> $faker->username,
				'firstname' => $faker->firstName,
				'lastname'	=> $faker->lastName,
				'email'		=> $faker->freeEmail,
				'password'	=> Hash::make('password'),
				'birthdate'	=> $faker->date($format = 'Y-m-d'),
				'description'	=> $faker->paragraph($nbSentences = 3),
				'admin'	=> false
			]);
		}
	}
}