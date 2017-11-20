<?php
// Closure::call()

class A {private $x = 1;}

// 以前のバージョンのコード
$getX = function() {return $this->x;};
$getXCB = $getX->bindTo(new A, 'A'); // 中間クロージャが必要
echo $getXCB();

// PHP 7 以降でのコード
$getX = function() {return $this->x;};
echo $getX->call(new A);

// 11
