<?php

	// interface Iterator extends Traversable {
	// 	// 方法
	// 	abstract public mixed current (void)

	// 	abstract public scalar key (void)

	// 	abstract public void next (void)

	// 	abstract public void rewind (void)

	// 	abstract public boolean valid (void)
	// }

	class A implements Iterator {
		public $name = "zhangsan";
		public $age = 20;
		public $sex = "man";
		public $arr = array('id' => 1, 'brand' => 'huawei', 'channel' => '4G', 'price' => 3000);

		public function current () {
			echo __METHOD__, '<br />';
		}
		public function key () {
			echo __METHOD__, '<br />';
		}
		public function next () {
			echo __METHOD__, '<br />';
		}
		public function rewind () {
			echo __METHOD__, '<br />';
		}
		public function valid () {
			echo __METHOD__, '<br />';
		}
	}

	$obj = new A();

	foreach($obj as $key => $value) {
		// echo $key, '=>', $value, '<br />';
	}

	/**
	 * 遍历对象
	 */
	// class A
	// {
	// 	public static $name = "zhangsan";
	// 	public $age = 20;
	// 	public $sex = "man";
	// 	private $salary = 10000;
	// 	protected $honor = "king"; 
		
	// 	public function showInfo () {}
	// }
	
	// $obj = new A();

	// foreach ($obj as $key => $value) {
	// 	echo $key, "=>", $value, "<br />";
	// }