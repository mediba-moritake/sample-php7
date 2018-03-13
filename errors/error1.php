<?php
# Error1

try {
    throw new Error('test');
} catch (Throwable $t) {
    // PHP 7.1 で実行される。PHP 5.6 では実行エラーとなる。
    echo 'catch Throwable!', PHP_EOL;
    var_dump($t);
} catch (Exception $e) {
    // PHP 7.1/5.6 では到達しない。
    echo 'catch Exception!', PHP_EOL;
    var_dump($e);
}
