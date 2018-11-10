<?php  

namespace App;

use App\Session;
use App\Cookie;
use App\Models\UserModel;

class Auth 
{
	private $model;

	public function __construct()
	{
		$this->model = new UserModel();
	}

	public function login($user)
	{
		//
	}

	public static function verifyAdminIsLogged()
	{
		if(Session::sessionExists('admin')) {
			return true;
		} else {
			return Cookie::cookieExists('admin');
		}	
		 
	}

	public static function verifyUserIsLogged()
	{	
		if(Session::sessionExists('user')) {
			return true;
		} else {
			return Cookie::cookieExists('user');
		}

	}

	public function createSession($type = 'user')
	{
		Session::setSession($type, $this->user);
	}

	public function createCookie($type = 'user')
	{
		Cookie::setCookies([$type => $this->user->getUsername(), 'password' => $this->user->getPassword()]);
	}

	public function logout()
	{
		Session::destroySessions();
		Cookie::destroyAllCookies();
	}
		
}