<?php
// Q1 変数と文字列
<?php
$name = '屋久';
echo "私の名前は「" . $name . "」です。";
?>

// Q2 四則演算
$num = 5 * 4;
echo $num;

$num = $num / 2;
echo $num;

// Q3 日付操作
date_default_timezone_set('Asia/Tokyo');
$current_datetime = date("Y年m月d日 H時i分s秒");
echo "現在時刻は、" . $current_datetime . "です。";

// Q4 条件分岐-1 if文
$device = "mac";

if ($device === "windows" || $device === "mac") {
  echo "使用OSは、" . $device . "です。";
} else {
  echo "どちらでもありません。";
}

// Q5 条件分岐-2 三項演算子
$age = 18;

$age = ($age < 18) ? '未成年です。' : '成人です。';

echo $age;

// Q6 配列
$kanto = ["東京都", "神奈川県", "群馬県", "栃木県", "千葉県", "茨城県", "埼玉県"];

echo $kanto[3] . "と" . $kanto[4] . "は関東地方の都道府県です。";

// Q7 連想配列-1
$kanto_capitals = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市"
];

foreach ($kanto_capitals as $capital) {
   echo $capital . PHP_EOL;
}

// Q8 連想配列-2
$kanto_capitals = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市",
];

$target_prefecture = "埼玉県";

if (array_key_exists($target_prefecture, $kanto_capitals)) {
  $capital = $kanto_capitals[$target_prefecture]; 
  echo "{$target_prefecture}の県庁所在地は、{$capital}です。";
}

// Q9 連想配列-3
$kanto_capitals = [
  "東京都" => "新宿区",
  "神奈川県" => "横浜市",
  "千葉県" => "千葉市",
  "埼玉県" => "さいたま市",
  "栃木県" => "宇都宮市",
  "群馬県" => "前橋市",
  "茨城県" => "水戸市",
  "大阪府" => "大阪市",
  "北海道" => "札幌市"
];

foreach ($kanto_capitals as $prefecture => $capital) {
if (in_array($prefecture, ["東京都", "神奈川県", "千葉県", "埼玉県", "栃木県", "群馬県", "茨城県"])) {
     echo "{$prefecture}の県庁所在地は、{$capital}です。" . PHP_EOL;
  } else {
      echo "{$prefecture}は関東地方ではありません。" . PHP_EOL;
  }
}

// Q10 関数-1
function hello($name) {
  return "{$name}さん、こんにちは。\n";
}

$name1 = hello("金谷");
$name2 = hello("安藤");

echo $name1;
echo $name2;

// Q11 関数-2
function calcTaxInPrice($price) {
  $taxRate = 0.1; 
  $taxInPrice = $price * (1 + $taxRate);
  return $taxInPrice;
}

$price = 1000; 

$taxInPrice = calcTaxInPrice($price); 

echo "{$price}円の商品の税込価格は{$taxInPrice}円です。";

// Q12 関数とif文
function distinguishNum($number) {
  if ($number % 2 !== 0) {
      return "{$number}は奇数です。";
  } else {
      return "{$number}は偶数です。";
  }
}

$oddNumber = distinguishNum(11);
$evenNumber = distinguishNum(24);

echo $oddNumber . PHP_EOL;
echo $evenNumber . PHP_EOL;

// Q13 関数とswitch文
function evaluateGrade($grade) {
    switch ($grade) {
        case 'A':
        case 'B':
            return "合格です。";
        case 'C':
            return "合格ですが追加課題があります。";
        case 'D':
            return "不合格です。";
        default:
            return "判定不明です。講師に問い合わせてください。";
    }
}

$grade1 = 'A'; 
$grade2 = 'F'; 

echo evaluateGrade($grade1) . PHP_EOL;
echo evaluateGrade($grade2) . PHP_EOL;

?>