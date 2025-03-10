<?php
// 配列のルール
$people = array('Taro','Jiro','Saburo');

var_dump($people);
echo  "<br  />";

// 配列の番号
echo $people[0];
echo  "<br  />";

// 連想配列
$people = array(
  'person1'  => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo',
);

var_dump($people);
echo  "<br  />";

  // （別解）
  $people = [
    'person1' =>  'taro',
    'person2' =>  'jiro',
  ];

  echo $people['person1'];
  echo  "<br  />";


// 多次元配列
$people = [
  [
    "last_name"  =>  "山田",
    "first_name" =>  "太郎",
    "age" =>  "29",
    "gender"  =>  "男性",
  ],
  [
    "last_name"  =>  "鈴木",
    "first_name" =>  "次郎",
    "age" =>  "25",
    "gender"  =>  "男性",
  ],
  [
    "last_name"  =>  "佐藤",
    "first_name" =>  "花子",
    "age" =>  "20",
    "gender"  =>  "女性",
  ]
];

echo  $people[0]["last_name"];
echo  "<br  />";


// foreach文
$people = array('Taro','Jiro','Saburo');

foreach($people as $person){
  echo  $person;
  echo  "<br  />";
}

// 配列のループ処理の場合に添字を取得する方法
$people = array(
  'person1' => 'Taro',
  'person2'  => 'Jiro',
  'person3'  => 'Saburo'
);

foreach ($people as $person => $name) {
  print $person . "は" . $name . "です" . '<br />';
}

// 問題   0%
// $people = array(
//   [
//     'person1' =>  'Taro',
//     'person2' =>  'Jiro',
//     'person3' =>  'Saburo',
//   ],
//   [
//     'number1'  =>  '25',
//     'number2'  =>  '20',
//     'number3'  =>  '16',
//   ],
//   [
//     'mw1' =>  'men',
//     'mw2' =>  'men',
//     'mw3' =>  'women',
//   ]
// )

// foreach($people as  $person => $name),
// foreach($people as  $number =>  $age),
// foreach($people as  $mw =>  $gender){
//   print $name . "(" . $age .  "歳"  . $gender . "）"  . "<br  />";
// }

$people = [
  ['Taro' , 25, 'men'],
  ['Jiro' , 20, 'men'],
  ['Hanako' , 16, 'women']
];

foreach ($people  as  $person){
  echo  $person[0] .  '(' . $person[1] .  '歳'  . $person[2]  . ')' . '<br  />'; 
}