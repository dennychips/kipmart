<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserSeeder');
		$this->command->info('User Seeded');
		$this->call('PostSeeder');
		$this->command->info('Post table Seeded');
		// $this->call('FeedSeeder');
		// $this->command->info('Feed table Seeded');
		$this->call('RelationshipSeeder');
		$this->command->info('Relationship table Seeded');
	}

}