<?php
//task1

//  Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
//
//Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
//
//Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

//class Worker {
//
//    public $name;
//    public $age;
//    public $salary;
//}
//
//$obj1 = new Worker();
//$obj2 = new Worker();
//
//$obj1->name = 'Иван';
//$obj1->age = 25;
//$obj1->salary = 1000;
//
//$obj2->name = 'Вася';
//$obj2->age = 26;
//$obj2->salary = 2000;
//
//echo $obj1->age + $obj2->age;
//echo "<br>";
//echo $obj1->salary + $obj2->salary;

//task 2

// Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), salary (зарплата) и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
//
//Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.

//class Worker {
//    private $name;
//    private $age;
//    private $salary;
//
//    public function getName(){
//        return $this->name;
//    }
//
//    public function getAge(){
//        return $this->age;
//    }
//
//    public function getSalary(){
//        return $this->salary;
//    }
//
//    public function setName($set){
//        return $this->name = $set;
//    }
//
//    public function setAge($set){
//        return $this->age = $set;
//    }
//
//    public function setSalary($set){
//        return $this->salary = $set;
//    }
//}
//
//$obj1 = new Worker();
//$obj2 = new Worker();
//
//$obj1->setName('Иван');
//$obj1->setAge(25);
//$obj1->setSalary(1000);
//
//$obj2->setName('Вася');
//$obj2->setAge(26);
//$obj2->setSalary(2000);
//
//echo $obj1->getAge() + $obj2->getAge();
//echo "<br>";
//echo $obj1->getSalary() + $obj2->getSalary();


//task3
//Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст на корректность
// (от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового возраста
// (если возраст не корректный - он не должен меняться).

//class Worker {
//    private $name;
//    private $age;
//    private $salary;
//
//    public function getName(){
//        return $this->name;
//    }
//
//    public function getAge(){
//        return $this->age;
//    }
//
//    public function getSalary(){
//        return $this->salary;
//    }
//
//    public function setName($set){
//        return $this->name = $set;
//    }
//
//    public function setAge($age){
//        if ($this->checkAge($age)){
//            return $this->age = $age;
//        }
//        return $this->age;
//
//    }
//
//    public function setSalary($set){
//        return $this->salary = $set;
//    }
//
//    private function checkAge($age){
//        if ($age < 100 && $age > 1){
//            return true;
//        }
//        return false;
//    }
//}
//
//$obj1 = new Worker();
//
//
//$obj1->setAge(10);
//echo $obj1->getAge();
//
//$obj1->setAge(100);
//echo $obj1->getAge();

//task 4
// Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата).
// Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker(имя, возраст) ).
// Сделайте также public методы getName, getSalary.
//Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. Выведите на экран произведение его возраста и зарплаты.

class Worker {
    private $name;
    private $salary;
    public $age;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$obj = new Worker('Dima', 25, 1000);

echo $obj->getSalary() * $obj->age;



