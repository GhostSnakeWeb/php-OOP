<?php

//Person 1
$person1_name = 'Peter';
$person1_speciality = 'Programmer';
$person1_age = 25;

function person1_hello($name, $spec, $age)
{
	echo "Hello! My name is $name. I'm $spec and $age years old.";
}

person1_hello($person1_name, $person1_speciality, $person1_age);
echo "<br>";
//Person 2
$person2_name = 'Jane';
$person2_speciality = 'Web-designer';
$person2_age = 23;

function person2_hello($name, $spec, $age)
{
	echo "Hello! My name is $name. I'm $spec and $age years old.";
}

person2_hello($person2_name, $person2_speciality, $person2_age);

?>