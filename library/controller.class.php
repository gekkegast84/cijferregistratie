<?php
class Controller
{
	//fields
	protected $_model;
	protected $_controller;
	protected $_action;
	
	
	//constructor word aangeroepen omdat de UsersController class er geen heeft.
	public function __construct($model, $controller, $action)
	{
		$this->_model = new $model(); //Er word een instantie gemaakt vam de User class
		//$this->_model = new User();
		$this->_controller = $controller; // this->_controller = users
		$this->_action = $action;
		
	}

}
?>