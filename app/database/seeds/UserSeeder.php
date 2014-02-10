<?php 

class UserSeeder extends Seeder {
	public function run() {
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
		User::create([
			'username' 	=> 'example_1',
			'firstname' => 'Example',
			'lastname'	=> 'User1',
			'email'		=> 'example_1@market.com',
			'password'	=> Hash::make('password'),
			'birthdate'	=> '1983-01-06',
			'description'	=> 'Lorem Ipsum',
			'admin'	=> false
		]);
	}
}