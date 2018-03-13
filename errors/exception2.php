<?php
# Exception2

try {
    throw new Exception('test');
} catch (Exception $e) {
    // PHP 7.1/5.6 で実行される。
    echo 'catch Exception!', PHP_EOL;
    var_dump($e);
} catch (Throwable $t) {
    // PHP 7.1/5.6 では到達しない。
    echo 'catch Throwable!', PHP_EOL;
    var_dump($t);
}
