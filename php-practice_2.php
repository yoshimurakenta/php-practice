<?php
// Q1 tic-tac問題


for($i =1; $i <=100;$i++){
  $count = $i;
  if($i % 4 ===0 && $i % 5 ===0){
        $count = "tic-tac";
      } elseif ($i % 4 ===0) {
        $count = "tic";
      } elseif ($i % 5===0) {
        $count = "tac";
      }
        echo $count . "\n";
  
  }



// Q2 多次元連想配列

$personalInfos = [
  [
      'name' => 'Aさん',
      'mail' => 'aaa@mail.com',
      'tel'  => '09011112222'
  ],
  [
      'name' => 'Bさん',
      'mail' => 'bbb@mail.com',
      'tel'  => '08033334444'
  ],
  [
      'name' => 'Cさん',
      'mail' => 'ccc@mail.com',
      'tel'  => '09055556666'
  ],
];

//問題①

echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。';

//問題②

foreach ($personalInfos as $key => $value)
{
 echo $key+1 . '番目の' . $value['name'] .'さんのメールアドレスは' . $value['mail'] . 'で、電話番号は' .$value ['tel'] . 'です。' ."\n"; 
}

//問題③

$ageList = [25,30,18];

foreach ($ageList as $key => $value){
    $personalInfos[$key]["age"] = $value;
}
var_dump($personalInfos);



// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    // public function __construct($id, $name)
    // {
    //     $this->studentId = $id;
    //     $this->studentName = $name;
    // }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}
$yamada = new Student('120' , '山田');
echo $yamada -> studentId;
echo $yamada -> studentName;

echo '学籍番号' . $yamada->studentId . 'は'. $yamada->studentName . 'です。';

//コンストラクタのメリットをかく
 

// Q4 オブジェクト-2

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($subject)
    {
        echo $this->studentName .'は' . $subject . 'の授業に参加しました。' . '学籍番号：' . $this->studentId;
    }
}

$yamada = new Student(120,'山田');
$yamada->attend('PHP');



// Q5 定義済みクラス

//問題①

$date = new DateTime(); //deteTimeインスタンス　データ型オブジェクト
echo $date->modify('-1month')->format('Y.m.d'); //プロパティの値を変更　var_dumpで確認

//問題② 

$date = new DateTime('');
$date2 = new DateTime('1992-04-25');

echo $date->diff($date2)->format('あの日から%a日経過しました。');
?>

<!-- メソッドチェーンはオブジェクトが連なってるとできる。 -->

