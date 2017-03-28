<?php

class Person{
	public $name;
	public $job;

	public function __construct($name, $job){
		$this-> name = $name;
		$this-> job = $job;
	}

	public function communication($style = 'value'){
		return 'communication' . ' ' .  $style;
	}
}

$p = new Person('john', 'Teacher');
#var_dump($p);
#print_r($p);

echo $p->name;
echo $p->communication('break down');
