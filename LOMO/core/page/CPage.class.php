<?php

namespace LOMO\core\page;
class CPage {
	public static $page = null;

	protected $stringPageTitle = '';



	private function __construct() {

	}

	private function __clone() {
		/*Пусто для реализации паттерна Singletone*/
	}

	public static function getInstance() {
		if( !self::$page ) {
			self::$page = new CPage();
		}

		return self::$page;
	}

	public function SetTitle($title){
		$this->stringPageTitle = $title;
	}
	public function ShowTitle(){
		echo "<title>".$this->stringPageTitle."</title>";
	}

}