<?php
echo '数字を入力してください >';
$number = trim(fgets(STDIN));

// if($number > 10){
//   echo '10よりも大きいです';
// } else {
//   echo '10よりも小さいです';
// }

if($number > 10):
  echo '10よりも大きいです';
else:
  echo '10以下です';
endif;