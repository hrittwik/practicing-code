<?php

class Person{
	public $name;
	public $job;

	public function __construct($name, $job){
		$this-> name = $name;
		$this-> job = $job;
	}
	public function communication(){
		return 'communication';
	}
}

$p = new Person('john', 'Teacher');
var_dump($p);
print_r($p);
