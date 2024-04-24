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
        echo $this->name . 'さんは' . $this->age . '歳の' . $this->skill . 'です';
    }
}
//名前：田中太郎、年齢：20、技術：ネットワークエンジニアでEngineerオブジェクトを作成
$engineer = new Engineer('田中太郎', 20, 'ネットワークエンジニア');
// $engineer->name = '田中太郎';
// $engineer->age = 20;
// $engineer->skill = 'ネットワークエンジニア';
//作成したEngineerオブジェクトのintroduce()メソッドを実行
$engineer->introduce();
