<?php

//Write a class for a 'person'
class Person{
	private $gender;
	private $firstName;
	private $lastName;
	private $age;
	private $legs;
	private $arms;
	private $hair;
	private $eyes;
	private $ears;
	private $nose;
	
	public function __construct($gender, $firstName, $lastName, $age, $legs, $arms, $hair, $eyes, $ears, $nose){
		$this->gender = $gender;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->age = $age;
		$this->legs = $legs;
		$this->arms = $arms;
		$this->hair = $hair;
		$this->eyes = $eyes;
		$this->ears = $ears;
		$this->nose = $nose;
	}
	
	public function postGender(){
		return $this->gender;
	}
}

$person = new Person(26);
echo $person->postGender();
?>
