<?php
echo '西暦を入力してくだしさい >';
$year = trim(fgets(STDIN));

if (is_numeric($year) && $year <= date('Y')) {
  //echo '数字が入力されました';
  if ($year >= 2018) {
    echo '令和です';
  } else if ($year >= 1988) {
    echo '平成です';
  } else if($year >= 1925) {
    echo '昭和です';
  } else if($year >= 1911) {
    echo '大正です';
  } else if ($year >= 1867) {
    echo '明治です';
  }else {
    echo '明治より前です';
  }
}else {
  echo '今年よりも前の数字を入力してください';
}