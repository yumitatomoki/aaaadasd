<?php 
class Item {
  public string $name;
  public int $price;

  public function getPrice(string $end = '') {
    return number_format($this->price) . $end;
  }
}


//PHP入門
$php_basic = new Item();
$php_basic->name = 'PHP入門';
$php_basic->price = 1500000;

echo $php_basic->name, '/' , $php_basic->getPrice('円');

//JS入門
$js_basic = new Item();
$js_basic->name = 'JS入門';
$js_basic->price = 2300;

