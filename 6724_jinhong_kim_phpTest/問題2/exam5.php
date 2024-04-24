<?php
class Employee
{

    //켑슐화 
  private $name;
  private $age;

  //콘스트럭트 
  public function __construct($name, $age)
  {
    $this->__set('name', $name);
    $this->__set('age', $age);
  }

  //__set메소드는 접근 불가 프로퍼티의 값을 설정할 때 호출된다.
  public function __set($var, $value)
  {//한마디로 변수 초기화..?
    $this->{$var} = $value; //{$var} name으로 변함 ~ / $value 에는 $name이 들어감 
  }

  //__get메서드는 접근 불가 프로퍼티의 값을 읽을때 호출된다
  public function __get($var)
  {
    return $this->{$var};
  }
  
  // フィールドに保持された情報を出力するintroduce()メソッドを作成する
  public function introduce()
  {
    echo  $this->name . "さんは" . $this->age . "歳です<br>";
  }
}

$employee = new Employee("田中太郎" , 20);
$employee->introduce();
