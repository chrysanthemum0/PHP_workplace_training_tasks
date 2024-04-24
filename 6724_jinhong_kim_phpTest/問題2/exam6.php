<?php
class Employee
{

  private $name;
  private $age;

  public function __construct($name, $age) {
    $this->__set('name', $name);
    $this->__set('age', $age);
  }

  public function __set($var, $value){
    $this->{$var} = $value;
  }

  public function __get($var){
    return $this->{$var};
  }
  
  // フィールドに保持された情報を出力するintroduce()メソッドを作成する
  public function introduce(){
    echo  $this->name . "さんは" . $this->age . "歳です<br>";
  }
}

class Engineer extends Employee{

    protected $skill;

     // インスタンス変数「名前（name）」と「年齢（age）」を初期化するコンストラクタを社員クラスに定義する
     public function __construct($name, $age, $skill){
        // 부모 콘스트럭스 사용함 
        parent::__construct($name, $age);
        // 스킬을 사용하기 위해 초기화 
        $this->__set('skill', $skill);
     }

     public function introduce()
     {
         echo $this->name . 'さんは' . $this->age . '歳の' . $this->skill . 'です。'; 
     }

}

$engineer = new Engineer("田中太郎" , 20, 'engineer');
$engineer->introduce();
