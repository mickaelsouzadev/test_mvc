<?php  

namespace App\Controllers;

class TestController extends Controller 
{

	public function __construct()
	{
		parent::__construct('UserModel', null);
	}


	public static function login()
	{
		echo "<h1>Login</h1>";
	}
}