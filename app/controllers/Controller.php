<?php  

namespace App\Controllers;

class Controller
{	
	private $model;
	private $template_dir;

	public function __construct($model, $template_dir = null)
	{
		$model_class_name = '\App\Models\\'.$model;
		
		$this->model = new $model_class_name();
		$this->template_dir = $template_dir;
	}

	public function render($view)
	{
		$path = __DIR__.'\..\views';

		if($this->template_dir){
			$path = __DIR__.'\..\views\\'.$this->template_dir;
		}

		$path = str_replace("\\controllers", "", $path);



		include_once $path.'\\'.$view.'.php';

	}


}