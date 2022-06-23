<?php 
class Item {
  public string $name;
  public int $price;
}


//PHP入門
$php_basic = new Item();
$php_basic->name = 'PHP入門';
$php_basic->price = 1500;

echo $php_basic->name, '/' , $php_basic->price;

$js_basic = new Item();
$js_basic->name = 'JS入門';
$js_basic->price = 2300;
