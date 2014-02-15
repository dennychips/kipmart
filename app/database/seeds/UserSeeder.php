<?php 

class UserSeeder extends Seeder {
	public function run() {
		DB::table('users')->truncate();
		// $user1 = new User;
		// $user1->username 	= 'admin';
		// $user1->firstname = 'Admin';
		// $user1->lastname	= 'Web';
		// $user1->email		= 'admin@market.com';
		// $user1->password	= 'password';
		// $user1->password_confirmation	= 'password';
		// $user1->birthdate	= '1980-02-03';
		// $user1->description	= 'Lorem Ipsum';
		// $user1->admin	= true;
		// $user1->save();

		// $user2 = new User;
		// $user2->username 	= 'denipermana';
		// $user2->firstname = 'Deni';
		// $user2->lastname	= 'Permana';
		// $user2->email		= 'deni@duniakreatif.com';
		// $user2->password	= Hash::make'password';
		// $user2->password_confirmation	= 'password';
		// $user2->birthdate	= '1980-02-03';
		// $user2->description	= 'Lorem Ipsum';
		// $user2->admin	= false;
		// $user2->save();

		$user1 = User::create([
			'username' 	=> 'admin',
			'firstname' => 'Admin',
			'lastname'	=> 'Web',
			'email'		=> 'admin@market.com',
			'password'	=> Hash::make('password'),
			'birthdate'	=> '1980-02-03',
			'description'	=> 'Lorem Ipsum',
			'admin'	=> true
		]);
		$user2 = User::create([
			'username' 	=> 'denipermana',
			'firstname' => 'Deni',
			'lastname'	=> 'Permana',
			'email'		=> 'deni@duniakreatif.com',
			'password'	=> Hash::make('password'),
			'birthdate'	=> '1983-01-06',
			'description'	=> 'Lorem Ipsum',
			'admin'	=> false
		]);
		// $errors = $user1->errors();
		// $errors2 = $user2->errors();
		// var_dump($errors);
		// var_dump($errors2);
		// $faker = Faker\Factory::create('en_US');
		// $faker->addProvider(new Faker\Provider\en_US\Address($faker));
		// $faker->addProvider(new Faker\Provider\DateTime($faker));
		// $faker->addProvider(new Faker\Provider\Base($faker));
		// $faker->addProvider(new Faker\Provider\en_US\Company($faker));
		// $faker->addProvider(new Faker\Provider\Internet($faker));
		// $faker->addProvider(new Faker\Provider\Lorem($faker));

		// for($x=0;$x<10;$x++){
		// 	User::create([
		// 		'username' 	=> $faker->username,
		// 		'firstname' => $faker->firstName,
		// 		'lastname'	=> $faker->lastName,
		// 		'email'		=> $faker->freeEmail,
		// 		'password'	=> Hash::make('password'),
		// 		'birthdate'	=> $faker->date($format = 'Y-m-d'),
		// 		'description'	=> $faker->paragraph($nbSentences = 3),
		// 		'admin'	=> false
		// 	]);
		// }
	}
}