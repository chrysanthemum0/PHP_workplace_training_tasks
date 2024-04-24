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
        // エンジニアクラスの名前と年齢は社員クラスのコンストラクタを利用する
        parent::__construct($name, $age);
        // インスタンス変数「技術（skill）」を初期化するコンストラクタをエンジニアクラスに定義
        $this->__set('skill', $skill);
     }

     public function introduce()
  {
    echo  $this->name . "さんは" . $this->age . "歳の" . $this->skill . "です<br>";
  }
}

$workers = [];
$workers[] = new Engineer('DANAKA TARO', 20, 'ENJ');
$workers[] = new Engineer('JIHONG KIM', 25, 'NEW ENJ');
$workers[] = new Engineer('NANA', 40, '');

foreach ($workers as $value) {
    echo $value->introduce() . '<br>';
}
