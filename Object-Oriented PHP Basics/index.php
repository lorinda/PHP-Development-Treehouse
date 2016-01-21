<?php

	class Product
	{
		
		public static $manufacturer = "Bart Taylor";



		public $name = 'default_name';
		public $price;
		public $desc;

		function __construct($nameNew, $price, $desc){

			$this->name = $nameNew;
			$this->price = $price;
			$this->desc = $desc;
		}
		

		public function getInfo(){

			return "Product name: ". $this->name;
		}

		public function getMaker(){
			return self::$manufacturer; //static
		}

	}

	class Soda extends Product
	{
		public $flavor;

		function __construct($nameNew, $price, $desc, $flavor){

			parent::__construct($nameNew, $price, $desc);
			$this->flavor = $flavor;
		}
		

		public function getInfo(){
			return "Product Name: ".$this->name." Flavor: ".$this->flavor;
		}
	}
	//$p = new Product();

	// $p->name = "Space and Juice Soda";   BAD PRACTICE
	// echo $p->name;

	$shirt = new Product("Space Juice T-Shirt", 20, "Grey T-shirt");
	$soda = new Soda("Space Juice Soda", 2, "Thirst Mutilator", "Grape");
	echo $shirt->getInfo()."<br>";
	echo $soda->getInfo()."<br>";

	echo $shirt->getMaker()."<br>";

	echo $shirt::$manufacturer;

	//OOP TOOLS
	//True if method named getPrice in Product class (or $object)
	return method_exists("Product","getPrice");

	//subclass
	$s = new Soda();

	is_subclass_of($s, "Product");

	//Sub variables for Class Names
	$class = "Product";
	$p = new $class;

	$m = "getName";
	$name = $p->m();

?>