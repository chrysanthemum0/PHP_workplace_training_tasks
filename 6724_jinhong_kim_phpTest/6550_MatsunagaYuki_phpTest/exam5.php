<?php
class Employee
{
    //フィールドには名前（name）と年齢（age）をもつ
    //フィールドはカプセル化しクラス外からの直接アクセスを禁止する
    protected $name;
    protected $age;
    //コンストラクタ
    public function __construct($name, $age) {
        $this->__set('name', $name);
        $this->__set('age', $age);
    }
    //セッター
    public function __set($var, $value) {
        $this->{$var} = $value;
    }
    //ゲッター
    public function __get($var) {
        return $this->{$var};
    }
    //フィールドに保持された情報を出力するintroduce()メソッドを作成する
    public function introduce() {
        echo $this->name . 'さんは' . $this->age . '歳です';
    }
}
//実際に初期化して結果を表示する
$employee = new Employee('名前', '年齢');
$employee->name = '田中太郎';
$employee->age = 20;
$employee->introduce();
