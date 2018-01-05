// foreach の変更

// foreach は内部の配列ポインタを変更しない

<?php

$array = [0, 1, 2];
foreach ($array as &$val) {
    var_dump(current($array));
}

//PHP 5
//int(1)
//int(2)
//bool(false)
//
//PHP 7
//int(0)
//int(0)
//int(0)
?>



// 値渡しの foreach は、配列のコピーを使って操作を進める

<?php

$array = [0];
foreach ($array as &$val) {
    var_dump($val);
    $array[1] = 1;
}

// PHP 5
//int(0)
//
// PHP 7
//int(0)
//int(1)
?>
