<?php

$name = 'taguchi';

// $text = <<< 'EOT' // nowdoc
// 変数を展開する → <<<EOT とする('')をはずす // heredoc
// 字下げも出来る

$text = <<<EOT
hello! $name
  this is looooong
text!

EOT;

echo $text;

// here ドキュメント
// EOT(End OF Document
// 終端記号(EOT)の前には改行が必要
