<?php
// スカラー型宣言

declare(strict_types=1);

function sumOfInts(int ...$ints)
{
    var_dump($ints);
    return array_sum($ints);
}

var_dump(sumOfInts(2, '3', 4.1));

//Fatal error: Uncaught TypeError: Argument 2 passed to sumOfInts() must be of the type integer, string given, called in /sample-php7/new-features/scalar-type-declarations.php on line 12 and defined in /sample-php7/new-features/scalar-type-declarations.php:6
//Stack trace:
//#0 /sample-php7/new-features/scalar-type-declarations.php(12): sumOfInts(2, '3', 4.1)
//#1 {main}
//
//Next TypeError: Argument 3 passed to sumOfInts() must be of the type integer, float given, called in /sample-php7/new-features/scalar-type-declarations.php on line 12 and defined in /sample-php7/new-features/scalar-type-declarations.php:6
//Stack trace:
//#0 /sample-php7/new-features/scalar-type-declarations.php(12): sumOfInts(2, '3', 4.1)
//#1 {main}
//  thrown in /sample-php7/new-features/scalar-type-declarations.php on line 6



//array(3) {
//  [0]=>
//  int(2)
//  [1]=>
//  int(3)
//  [2]=>
//  int(4)
//}
//int(9)
