<?php
// Q1 変数と文字列
$name = '深澤';

echo '私の名前は「' . $name . '」です。' . PHP_EOL;

// Q2 四則演算
$num = 5 * 4;

echo $num . PHP_EOL;
echo $num / 2 . PHP_EOL;

// Q3 日付操作
echo '現在時刻は、' . date('Y年m月d日 H時i分s秒') . 'です。' . PHP_EOL;

// Q4 条件分岐-1 if文
$device = 'mac';

if ($device === 'windows') {
    echo '使用OSは、windowsです。';
} else {
    if ($device === 'mac') {
        echo '使用OSは、macです。';
    } else {
        echo 'どちらでもありません。';
    }
}

echo PHP_EOL;

// Q5 条件分岐-2 三項演算子
$age = 18;

$message = ($age < 18) ? '未成年です。' : '成人です。';

echo $message . PHP_EOL;

// Q6 配列
$kanto = [
  '東京都',
  '神奈川県',
  '栃木県',
  '千葉県',
  '埼玉県',
  '群馬県',
  '茨城県'
];

echo $kanto[2] . 'と' . $kanto[3] . 'は関東地方の都道府県です。' . PHP_EOL;

// Q7 連想配列-1
$prefectures = [
  '東京都' => '新宿区',
  '神奈川県' => '横浜市',
  '千葉県' => '千葉市',
  '埼玉県' => 'さいたま市',
  '栃木県' => '宇都宮市',
  '群馬県' => '前橋市',
  '茨城県' => '水戸市'
];

echo $prefectures['東京都'] . PHP_EOL;
echo $prefectures['神奈川県'] . PHP_EOL;
echo $prefectures['千葉県'] . PHP_EOL;
echo $prefectures['埼玉県'] . PHP_EOL;
echo $prefectures['栃木県'] . PHP_EOL;
echo $prefectures['群馬県'] . PHP_EOL;
echo $prefectures['茨城県'] . PHP_EOL;

// Q8 連想配列-2
if (isset($prefectures['埼玉県'])) {
  echo '埼玉県の県庁所在地は、' . $prefectures['埼玉県'] . 'です。' . PHP_EOL;
}

// Q9 連想配列-3
$prefectures['愛知県'] = '名古屋市';
$prefectures['大阪府'] = '大阪市';

$kanto = [
  '東京都',
  '神奈川県',
  '千葉県',
  '埼玉県',
  '栃木県',
  '群馬県',
  '茨城県'
];

foreach ($prefectures as $prefecture => $capital) {
  if (in_array($prefecture, $kanto)) {
      echo $prefecture . 'の県庁所在地は、' . $capital . 'です。' . PHP_EOL;
  } else {
      echo $prefecture . 'は関東地方ではありません。' . PHP_EOL;
  }
}

// Q10 関数-1
function hello($name)
{
    return $name . 'さん、こんにちは。';
}

echo hello('深澤') . PHP_EOL;
echo hello('西山') . PHP_EOL;

// Q11 関数-2
function calcTaxInPrice($price)
{
    return $price * 1.1;
}

$price = 1000;

$taxInPrice = calcTaxInPrice($price);

echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。' . PHP_EOL;

// Q12 関数とif文
function distinguishNum($num)
{
    if ($num % 2 === 0) {
        return $num . 'は偶数です。';
    } else {
        return $num . 'は奇数です。';
    }
}

echo distinguishNum(11) . PHP_EOL;
echo distinguishNum(24) . PHP_EOL;

// Q13 関数とswitch文
function evaluateGrade($grade)
{
    switch ($grade) {
      case 'A':
      case 'B':
        return '合格です。';

      case 'c':
        return '合格ですが追加課題があります。';

      case 'D':
        return '不合格です。';

      default:
        return '判定不明です。講師に問い合わせてください。';
    }
}

echo evaluateGrade('A') . PHP_EOL;
echo evaluateGrade('E') . PHP_EOL;

?>