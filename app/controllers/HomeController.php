<?php  

namespace App\Controllers;

class HomeController extends Controller 
{

	public function __construct()
	{
		parent::__construct('UserModel', 'test');
	}

	public static function index()
	{
		(new self)->render('hello');
	}

}