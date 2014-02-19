<?php 
use Zizaco\FactoryMuff\Facade\FactoryMuff;
class UserTest extends TestCase {
	public function testThatIsTrue()
	{
		$this->assertTrue(true);
	}

	/*
	// Username is required
	*/
	public function testUsernameIsRequired()
	{
		// create new user 
		$user = new User;
		// $user->username = 'denipermana';
		$user->email = 'deni@duniakreatif.com';
		$user->firstname = 'Deni';
		$user->lastname = 'Permana';
		$user->description = 'Lorem Ipsum';
		$user->birthdate = '1983-01-06';
		$user->password = 'password';
		
		$user->admin = false;
		//user should not save 
		$this->assertFalse($user->save());
		$errors = $user->errors()->all();
		$this->assertCount(1, $errors);
		$this->assertEquals($errors[0], "The username field is required.");
	}

	public function testCreateUser() 
	{
		$user = FactoryMuff::create('User');
		$this->assertEquals($user->id, $user->id);
	}
}