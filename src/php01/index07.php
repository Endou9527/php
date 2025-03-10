<?php
// 引数と戻り値あり
function  outputNumber($a)
{
  echo  "引数の値は"  . $a .  "です"  ;
  return;
}

outputNumber(2);
echo  "<br  />";

function text($number1,$number2)
{
  $value  = $number1  + $number2;
  return  $value;
}

$total  = text(2,4);
echo  $total;

function addNumber($a,$b)
{
  $add  = $a  + $b;
  return  $add;
}

$total  = text(2,3);
print  $total;
// ↑print!?...

echo  "<br  />";
// 引数と戻り値なし
function outputHello()
{
  echo  "Hello world";
}

outputHello();

// 問題（score）  60%
function  test($score1,$score2,$score3)
{
  $all  = $score1 + $score2 + $score3;
  // return  $allはいらない;

  if ($all  > 210){
    echo  "合計点は" . $all . "点なので合格です";
  }else{
    echo  "合計点は" .  $all  .  "点なので不合格です";
  }
}

  echo  (test(100,20,80));

  // 問題（面積） 5%
function area($width,$height,$top,$bottom)
{
  $triangle = ($width * $height)  / 2;
  $square = ($width * $height);
  $trapezoid  = ( ($top + $bottom)  * $height ) / 2;
}

$triangle = area(4,5,0,5);
$square = area(3,4,3,4);
$trapezoid  = area(6,7,8,9);
echo  $triangle;
echo  $square;
echo  $trapezoid;





function  getSquareArea($base,$height)
{
  return  $base * $height;
}
function  getTriangleArea($base,$height)
{
  return  $base * $height  / 2;
}
function getTrapezoidArea($upperBase,$lowerBase,$height)
{
  return  ($upperBase +  $lowerBase)  * $height  / 2;
}

echo  getSquareArea(5,5)  . "\n";
echo  getTriangleArea(7,8). "\n";
echo  getTrapezoidArea(4,5,4);