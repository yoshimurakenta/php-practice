<?php
// Q1 変数と文字列

$message = '「吉村」';

$newMessage = '私の名前は' . $message . 'です。';
echo $newMessage;


// Q2 四則演算

$x = 5;
$y = 4;

$num = $x * $y;
echo $num. "\n";
$num = $x*$y/2;
echo $num;


// Q3 日付操作


$time = date('Y年m月d日H時i分s秒');

$newTime = '現在時刻は' . $time . 'です。';
echo $newTime;


// Q4 条件分岐-1 if文

$device = 'mac';

if($device==='mac' || 'windows')
{
    echo '使用OSは' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子

$age = 30;
if($age > 20){
    $message = '成人です。';
} else {
    $message ='未成年です。';
}

echo $message;


// Q6 配列

$pref = ['東京都','埼玉県','神奈川県','栃木県','千葉県','茨城県','群馬県'];
echo("$pref[3]") .'と'.("$pref[4]") .'は関東地方です。';


// Q7 連想配列-1


$pref =
    [
    '東京都' => '新宿区',
    '埼玉県' => 'さいたま市',
    '神奈川県' => '横浜市',
    '栃木県' => '宇都宮市',
    '千葉県' => '千葉市',
    '茨城県' => '水戸市',
    '群馬県' => '前橋市'
    ];

foreach ($pref as => $value) {
    echo "$value \n";
}

// Q8 連想配列-2

$pref =
    [
    '東京都' => '新宿区',
    '埼玉県' => 'さいたま市',
    '神奈川県' => '横浜市',
    '栃木県' => '宇都宮市',
    '千葉県' => '千葉市',
    '茨城県' => '水戸市',
    '群馬県' => '前橋市'
    ];

foreach ($pref as $key => $value)
{
    if($key === '埼玉県')
    {
        echo  $key. 'の県庁所在地'.$value. 'はです。';
        break;
    }
}

// Q9 連想配列-3

$pref =
    [
    '東京都' => '新宿区',
    '埼玉県' => 'さいたま市',
    '神奈川県' => '横浜市',
    '栃木県' => '宇都宮市',
    '千葉県' => '千葉市',
    '茨城県' => '水戸市',
    '群馬県' => '前橋市',
    '愛知県' => '名古屋市',
    '大阪府' => '大阪市'
    ];

foreach ($pref as $key => $value)
{
    if(($key !== '愛知県') && ($key !== '大阪府'))
    {
        echo  $key. 'の県庁所在地'.$value. 'はです。' . "\n";
    } else {
        echo $key . 'は関東地方ではありません。' . "\n";
    }
}

// Q10 関数-1


function hello($name)
{
    echo $name . 'さん、こんにちは。' . "\n";
}

function hello2($name)
{
    echo $name . 'さん、こんにちは。';
}
hello('斎藤');
hello2('吉村');


// Q11 関数-2


$price = 1000;
function calcTaxInPrice($price)
{
    $tax = $price*1.10;
    return $tax;
}



$taxInPrice = calcTaxInPrice($price);

echo $price. '円の商品の税込価格は'. $taxInPrice . '円です。';
// Q12 関数とif文


function distinguishNum($num)
{
  if($num % 2 === 1){
    return $num . 'は奇数です。' . "\n";
  }
  if($num % 2 === 0){
    return $num . 'は偶数です。' . "\n";
  }
}

$number =  distinguishNum(11);
$number2 = distinguishNum(24);

echo($number);
echo($number2);


// Q13 関数とswitch文

function evaluateGrade($scores)
{
    switch ($scores) {
        case 'A':
            echo '合格です。' . "\n";
            break;
            
        case 'B':
            echo '合格です。' . "\n";
            break;
            
        case 'C':
            echo '合格ですが追加課題があります。'. "\n";
            break;
        
        case 'D':
            echo '不合格です。'. "\n";
            break;
        
        
        default:
            return '判定不明です。講師に問い合わせてください。'. "\n";
            break;
    }
    
    
}

$score = evaluateGrade('A');
$score = evaluateGrade('E');
echo ($score);
?>
