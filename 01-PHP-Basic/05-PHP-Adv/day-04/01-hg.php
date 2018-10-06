<?php
	// class A {
	// 	public function __set($name, $value) {
	// 		$allow = array('name', 'age');
	// 		if (in_array($name, $age)) {
	// 			$this -> $name = $value;
	// 		}
	// 	}
	// }
	// $obj = new A();
	// $obj -> name = "zhangsan";
	// $obj -> age = 18;
	// $obj -> gender = "male";

	// var_dump($obj);


	class B {
		private static $obj = null;
		public function getObj() {
			if (!self::$obj instanceof self) {
				self::$obj = new self();
			}
			return new self();
		}

		private function __construct() {}
		private function __clone() {}
	}

	B::getObj();