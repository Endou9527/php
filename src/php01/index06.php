<?php
$count  = 0;
while ($count < 100){
  if($count % 3 == 0){
    $count++;
    continue;
  }
  if($count ==  20){
    break;
  }
  echo  $count;
  $count++;
  echo  '<br  />';
}

$i  = 0;
do{
  echo $i . '<br />';
  $i++;
}while  ($i < 5);

$num  = 0;
do{
  echo  'num  = ' . $num  .'<br  />';
  $num  ++;
  // $num  +=  1;
}while  ($num <  3);

// FizzBuzz問題。失敗！！
$i  = 1;
for ($i = 1; $i < 50; $i++){
  if  ($i % 15  ==  0){
    echo  'FizzBuzz'. '<br />';
    break;
  }
  if ($i  % 3 ==  0){
    echo  'Fizz' . '<br />';
    break;
  }
  if ($i  % 5 ==  0){
    echo  'Fizz' . '<br />';
    break;
  }else{
    echo  $i . '<br />';
  }
}
// FizzBuzz問題解答例
$Fizz = "Fizz";
$Buzz = "Buzz";
$FizzBuzz = "FizzBuzz";

for ($i = 1; $i <= 50; $i++){
  if($i % 15 == 0){
    echo  $FizzBuzz;
    // ↓else ifが出なかった...
  } else if($i % 3  ==  0){
    echo  $Fizz;
  } else if($i % 5  ==  0){
    echo  $Buzz;
  } else  {
    echo  $i;
  }
}
echo  "<br  />";

for($i  = 1;  $i  < 6;  $i++){
  for($j  = 1;  $j  < 6;  $j++){
    echo  "⚫︎";
  }
  echo  "<br />";
}