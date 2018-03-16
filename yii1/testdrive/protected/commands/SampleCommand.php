<?php

class SampleCommand extends CConsoleCommand {

    public function actionIndex() {
        try {
            throw new Exception('test');
        } catch (Throwable $t) {
            // PHP 7.1 で実行される。PHP 5.6 ではマッチしない。
            echo 'catch Throwable!', PHP_EOL;
            Yii::log($t, 'error');
        } catch (Exception $e) {
            // PHP 5.6 で実行される。PHP 7.1 では到達しない。
            echo 'catch Exception!', PHP_EOL;
            Yii::log($e, 'error');
        }
    }
}
