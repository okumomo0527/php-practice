<?php
// Q1 tic-tac問題
for ($i = 1; $i <= 100; $i++) {
   if ($i % 4 == 0 && $i % 5 == 0) {
    echo "tic-tac"  . "\n"; 
   } elseif ($i % 4 == 0) {
    echo "tic" . "\n";
   } elseif ($i % 5 == 0) {
       echo "tac"  . "\n";
   } else {
       echo $i . "\n";
   }
}

// Q2 多次元連想配列
問題１
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

  echo  $personalInfos[1]["name"] . "の電話番号は" . $personalInfos[1]["tel"] . "です。";

  
問題２
foreach ($personalInfos as $key => $val) {
  echo $key +1 . "番目の" . $val["name"] . "のメールアドレスは" . $val["mail"] . "で、電話番号は" . $val["tel"] . "です。";
}


問題３
foreach ($personalInfos as $key => $bal) {
  $personalInfos[$key]["age"] = $ageList[$key];
}

var_dump($personalInfos);


// Q3 オブジェクト-1
class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student (120, "山田"); 

echo '学籍番号' . $yamada -> studentId . '番の生徒は' . $yamada -> studentName . 'です。';

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
        echo $this -> studentName . 'は' . $subject . 'の授業に参加しました。' . '学籍番号:' . $this -> studentId;
    }
}

$yamada = new Student(120, '山田');
$yamada->attend('PHP');

// Q5 定義済みクラス
問題１
$date = new DateTime('2024-10-13');

$date -> modify ('-1 month');
echo $date -> format('Y-m-d') . "\n";

問題２
$origin = date_create('1992-04-25 Asia/Tokyo');
$target = date_create('now Asia/Tokyo');
$interval = date_diff($origin, $target);
echo $interval->format('あの日から%a日経過しました。');
?>