<?php

require_once('config/status_codes.php');

$random_numbers = array_rand( $status_codes ,4);

foreach($random_numbers as $index){
$options[]  = $status_codes[$index];
}

$question = $options[mt_rand(0,3)];
// $question = $options[array_rand($options,1)];

// echo  mt_rand(0,99);
// var_dump($question);

?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Status Code Quiz</title>
  <link rel="stylesheet" href="css/sanitize.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="stylesheet" href="css/index.css">
</head>
<body>
  <header class="header">
    <div class="header__inner">
     <a class="header__logo" href="/php03">Status Code Quiz
     </a>
    </div>
  </header>
  <!-- みどり -->
  <main>
    <!-- ↓きいろ -->
    <div class="quiz__content">
      <div class="question">
        <p class="question__text">Q.以下の内容に当てはまるステータスコードを選んでください</p>
        <p class="question__text">
        <?php echo $question['description'] ?>
        </p>
      </div>
    <!-- ↓ピンク -->
      <form class="quiz-form" action="result.php" method="post">
        <input type="hidden" name="answer_code" value="<?php  echo $question['code']  ?>">
          <div class="quiz-form__item">
            <?php foreach($options as $option): ?>
            <div class="quiz-form__group">
              <input class="quiz-form__radio" id="<?php echo $option['code']?>" type="radio" name="option" value="<?php echo $option['code']?>"></input>
              <label class="quiz-form__label" for="<?php echo $option['code']?>">
                <?php echo $option['code']?>
              </label>
            </div>
            <?php endforeach; ?>
          </div>
        
        <div class="quiz-form__button">
          <button class="quiz-form__submit" type="submit">回答</button>
        </div>
      </form>
    </div>
  </main>
</body>
</html>