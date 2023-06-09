<?php

class Person {
  public string $name;

  public int $age;

  public string $gender;

  function __construct($name, $age, $gender) {
    $this->name = $name;
    $this->age = $age;
    $this->gender = $gender;
  }

  public function self_introduction(){
    return '私の名前は' . $this->name . 'です。年齢は' . $this->age . "歳です";
  }

  public function ageAdd(){
    echo '誕生日が来ました。' . PHP_EOL;
    $this->age++;
  }
}

$shiohara = new Person('塩原', 30, "男性");
echo $shiohara->self_introduction() . PHP_EOL;
$shiohara->ageAdd();

echo $shiohara->self_introduction() . PHP_EOL;
$shiohara->ageAdd();

//下記のようなクラスを作成してください。
// Person
// name  : string
// age   : int
// gender: string

// __construct(name:string, age:int, gender:string)
// 名前、年齢、 性別を受け取ってプロパティを初期化する。

// selfIntroduction(): string
// 私の名前は〇〇です。年齢は〇〇歳です。性別は〇〇です。 という文字列を出力する。

// addAge(): void
// 誕生日が来ました。 という文字列を出力し、年齢を＋１する。


// クラスができたら適当なインスタンスを作成し、
// 自己紹介→年齢加算→自己紹介の順にメソッドを動かして年齢を確認してください。
