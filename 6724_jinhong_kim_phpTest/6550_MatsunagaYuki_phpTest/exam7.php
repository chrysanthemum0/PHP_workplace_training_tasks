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
//社員クラスを継承してエンジニアクラスを定義する
class Engineer extends Employee
{
    public $skill;
    //インスタンス変数「名前（name）」と「年齢（age）」を初期化するコンストラクタを社員クラスに定義する
    //エンジニアクラスの名前と年齢は社員クラスのコンストラクタを利用する
    //インスタンス変数「技術（skill）」を初期化するコンストラクタをエンジニアクラスに定義
    public function __construct($name, $age ,$skill)
    {
        parent::__construct($name, $age);
        $this->__set('skill', $skill);
    }
    //名前と年齢と技術の情報を以下の書式で出力するintroduce()メソッドをエンジニアクラスに定義
    public function introduce() {
        if (!empty($this->skill) === true) {
            echo $this->name . 'さんは' . $this->age . '歳の' . $this->skill . 'です';
        } else {
            echo $this->name . 'さんは' . $this->age . '歳です';
        }
    }
}
// Employeeクラスのオブジェクトを保存できる配列を生成する
$workers = array();
//「田中太郎、20歳」のEmployeeオブジェクトを生成し、配列に追加する
$workers[]= new Engineer('田中太郎', 20 ,'');
//「鈴木一郎、25歳、プログラマ」のEngineerオブジェクトを生成し、配列に追加する
$workers[]= new Engineer('鈴木一郎', 25 ,'プログラマ');
//「佐藤花子、30歳」のEmployeeオブジェクトを生成し、配列に追加する
$workers[]= new Engineer('佐藤花子', 30 ,'');
//拡張for文と、introduce()メソッドを利用して各オブジェクトの情報を全て出力する
foreach ($workers as $value) {
    echo $value->introduce() . '<br>';
}
