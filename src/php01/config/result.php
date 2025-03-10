<!-- 90% -->
<?php
$name = htmlspecialchars($_GET['name'],ENT_QUOTES);
$item = htmlspecialchars($_GET['item'],ENT_QUOTES);
$number = htmlspecialchars($_GET['number'],ENT_QUOTES);
print "私の名前は、"  . $name . "<br>";
print "ご希望の商品は、"  . $item . "<br>";
print "注文数は、"  . $number . "<br>";