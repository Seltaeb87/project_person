<?php

error_reporting(E_ALL);

//Schrijf een class voor een Persoon
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
		return "Man/Vrouw: " . $this->gender;
	}
	
	public function postfirstName(){
		return "Vooranaam: " . $this->firstName;
	}
	
	public function postlastName(){
		return "Achternaam: " . $this->lastName;
	}
	
	public function postAge(){
		return "Leeftijd: " . $this->age;
	}
	
	public function postLegs(){
		return "Aantal benen: " . $this->legs;
	}
	
	public function postArms(){
		return "Aantal armen: " . $this->arms;
	}
	
	public function postHair(){
		return "Haarkleur: " . $this->hair;
	}
	
	public function postEyes(){
		return "Aantal ogen: " . $this->eyes;
	}
	
	public function postEars(){
		return "Aantal oren: " . $this->ears;
	}
	
	public function postNose(){
		return "Neus: " . $this->nose;
	}
	
	public function postAll(){
		return array($this->postfirstName(),$this->postlastName(), $this->postGender(), $this->postAge(), $this->postLegs(), $this->postArms(), $this->postHair(), $this->postEyes(), $this->postEars(), $this->postNose());
		
	}
}

$bastiaan = new Person("Male", "Bastiaan", "Bitter", 26, 2, 2, "Blond", "Blauw", 2, "groot");
echo $bastiaan->postAll();

?>
