<?php
# Exception1

try {
    throw new Exception('test');
} catch (Throwable $t) {
    // PHP 7.1 で実行される。PHP 5.6 ではマッチしない。
    echo 'catch Throwable!', PHP_EOL;
    var_dump($t);
} catch (Exception $e) {
    // PHP 5.6 で実行される。PHP 7.1 では到達しない。
    echo 'catch Exception!', PHP_EOL;
    var_dump($e);
}
