<?php 

class UserTableSeeder extends Seeder
{
	
	public function run()
	{
		User::truncate();

		User::create([
			'username' => 'admin',
			'email' => 'admin@example.com',
			'password' => 'password'
			]);

		User::create([
			'username' => 'user1',
			'email' => 'user1@example.com',
			'password' => 'password'
			]);
	}
}