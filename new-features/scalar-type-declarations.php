<?php
// スカラー型宣言

// デフォルトのモード
function sumOfInts(int ...$ints)
{
    var_dump($ints);
    return array_sum($ints);
}

var_dump(sumOfInts(2, '3', 4.1));

//array(3) {
//  [0]=>
//  int(2)
//  [1]=>
//  int(3)
//  [2]=>
//  int(4)
//}
//int(9)
