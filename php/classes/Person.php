<?php

class Person 
{
  private $name;
  private $lastname;
  private $age;
  private $hp;
  private $mother;
  private $father;

  function __construct($name, $lastname, $age, $mother = null, $father = null)
  {
    $this->name = $name;
    $this->lastname = $lastname;
    $this->age = $age;
    $this->mother = $mother;
    $this->father = $father;
    $this->hp = 100;
  }
  function sayHi($name) 
  {
    return "Hi, $name, I'm " . $this->name;
  }
  function setHp($hp) 
  {
    if ($this->hp + $hp > 100) $this->hp = 100;
    else $this->hp = $this->hp + $hp;
  }
  function getHp() 
  {
    return $this->hp;
  }
  function getName() 
  {
    return $this->name;
  }
  function getLastName() 
  {
    return $this->lastname;
  }
  function getAge() 
  {
    return $this->age;
  }
  function getMother() 
  {
    return $this->mother;
  }
  function getFather() 
  {
    return $this->father;
  }
  function getInfo() 
  {
    return "<h2>A few words about me and my family</h2><br>" . "My name is " . $this->getName() . ", my last name is " . $this->getLastName() . ", I'm " . $this->getAge() . " years old." . "<br>My mother's name is " . $this->getMother()->getName() . " " . $this->getMother()->getLastName() . ", she's " . $this->getMother()->getAge() . " years old." . "<br>My father's name is " . $this->getFather()->getName() . " " . $this->getFather()->getLastName() . ", he's " . $this->getFather()->getAge() . " years old." . "<br>My grandmother on my mom's side is named " . $this->getMother()->getMother()->getName() . " " . $this->getMother()->getMother()->getLastName() . ", she's " . $this->getMother()->getMother()->getAge() . " years old." . "<br>My grandfather on my mom's side is named " . $this->getMother()->getFather()->getName() . " " . $this->getMother()->getFather()->getLastName() . ", he's " . $this->getMother()->getFather()->getAge() . " years old." . "<br>My grandmother on my dad's side is named " . $this->getFather()->getMother()->getName() . " " . $this->getFather()->getMother()->getLastName() . ", she's " . $this->getFather()->getMother()->getAge() . " years old." . "<br>My grandfather on my dad's side is named " . $this->getFather()->getFather()->getName() . " " . $this->getFather()->getFather()->getLastName() . ", he's " . $this->getFather()->getFather()->getAge() . " years old.";
  }
}

// !Здоровье человека не может быть более 100 единиц
$igor = new Person("Igor", "Ivanov", 78);
$marina = new Person("Marina", "Ivanova", 65);

$andrey = new Person("Andrey", "Stepanov", 70);
$irina = new Person("Irina", "Stepanova", 70);

$alex = new Person("Alex", "Ivanov", 40, $marina, $igor);
$olga = new Person("Olga", "Ivanova", 40, $irina, $andrey);

$valera = new Person("Valera", "Ivanov", 15, $olga, $alex);

echo $valera->getInfo();

//$valera->getMother()->getFather()->getName();

//$medKit = 50;
//$alex->setHp(-30); // Упал 70
//echo $alex->getHp() . "<br>";
//$alex->hp = setHp($medKit);// Нашел аптечку
//echo $alex->hp;