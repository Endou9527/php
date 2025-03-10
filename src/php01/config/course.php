<?php
// $company  = htmlspecialchars($_POST['company'], ENT_QUOTES);
$company  = htmlspecialchars($_GET['company'], ENT_QUOTES);
// 悪意のあるスクリプト（何かコードを入力すると実行されてしまうことがあるようだ）を防ぐ
print "会社名は"  . $company  . "ですね";
