<?
  header('Content-type: text/html; charset=utf-8');
  // Здоровье персонажа не может превышать 100 ед.
  class Person{
    public $name;
    public $age;
    private $hp;
    function __construct($name, $age){
      $this->name = $name;
      $this->age = $age;
      $this->hp = 100;
    }
    function getHp(){ // геттер
      return $this->hp;
    }
    function setHp($value){ // сеттер
      if($this->hp+$value >=100) $this->hp = 100;
      else $this->hp = $this->hp+$value;
    }
    function info(){
      echo "Меня зовут ".$this->name." - мне ".$this->age." лет<hr>";
    }
  }
  
  $person = new Person("Ivan", 30);
  $person2 = new Person("Alex", 30);
  $person3 = new Person("Olga", 30);
  $person->info();
  $person2->info();
  $person3->info();
  
  
  /*
  $medKit = 50;
  echo $person->getHp()."<hr>";
  $person->setHp(-30);
  echo $person->getHp()."<hr>";
  $person->setHp($medKit);
  echo $person->getHp()."<hr>";*/
  
  
  
  /*class Person{
    public $name;
    public $lastname;
    public $age;
    public $mother;
    public $father;
    function __construct($name, $lastname, $age, $mother, $father){
      $this->name = $name;
      $this->lastname = $lastname;
      $this->age = $age;
      $this->mother = $mother;
      $this->father = $father;
    }
  }
  
  
  //$person2 = new Person("Alex","Petrov", 40);
  $person4 = new Person("Alex", "Ivan", 70, null, null);
  $person3 = new Person("Petr", "Ivanov", 40, null, $person4);
  $person2 = new Person("Olga", "Ivanova", 37, null, null);
  $person1 = new Person("Ivan", "Ivanov", 15, $person2, $person3 );
  
  echo $person1->father->father->name;*/
?>