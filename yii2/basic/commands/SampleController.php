<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\commands;

use Yii;
use yii\console\Controller;
use yii\console\ExitCode;
use Throwable;
use Exception;

/**
 * This command echoes the first argument that you have entered.
 *
 * This command is provided as an example for you to learn how to create console commands.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class SampleController extends Controller
{
    /**
     * This command echoes what you have entered as the message.
     * @param string $message the message to be echoed.
     * @return int Exit code
     */
    public function actionIndex()
    {
        try {
            throw new Exception('test');
        } catch (Throwable $t) {
            // PHP 7.1 で実行される。PHP 5.6 ではマッチしない。
            echo 'catch Throwable!', PHP_EOL;
            Yii::error($t);
        } catch (Exception $e) {
            // PHP 5.6 で実行される。PHP 7.1 では到達しない。
            echo 'catch Exception!', PHP_EOL;
            Yii::error($e);
        }

        return ExitCode::OK;
    }
}
