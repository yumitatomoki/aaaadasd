<?php
class Item {
  private int $unit;
  
  public function __construct(int $unit) {
    $this->unit = $unit;
  }

  public function getUnit(): string {
    return $this->unit . '個';
  }
}

$eraser = new Item(10);
echo $eraser->getUnit();