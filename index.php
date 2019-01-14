<?php 

//Класс - более широкое понятие для отдельно взятого объекта. Например, люди и отдельно взятый человек. На основе класса можно описаnь объект.
//В классе создаются свойства будущего объекта и методы (функции)

class Person {
	public $name;
	public $speciality;
	public $age;

	//Функция-конструктор. Называется специально с двойным подчеркиванием, иначе работать не будет. Функция запускается каждый раз в момент создания нового объекта.
	public function __construct($name, $spec, $age) {

		//В свойтсва объекта записываем переданные параметры
		$this->name = $name;
		$this->speciality = $spec;
		$this->age = $age;
		//echo "New person just created!";
	}

	public function greeting() {
		//Функция обращается к свойству этого же объекта через this
		echo "Hello! My name is ". $this->name .". I'm ". $this->speciality. " and ". $this->age ." years old.<br>";
	}
}

//Новый объект класса
$person1 = new Person('Peter', 'Programmer', 25);
echo $person1->greeting();

$person2 = new Person('Jane', 'Web-designer', 23);
echo $person2->greeting();

//До конструктора
//Задаем свойству объекта значение
//$person1->name = 'Peter';
//$person1->speciality = 'Programmer';
//$person1->age = 25;

//У объекта обращаемся к его свойству
//echo $person1->name; 

//Обращаемся к функции объекта
//$person1->greeting($person1->name, $person1->speciality, $person1->age);

?>