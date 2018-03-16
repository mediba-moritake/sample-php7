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
//            Yii::getLogger()->log($t, 'error');
        } catch (Exception $e) {
            // PHP 5.6 で実行される。PHP 7.1 では到達しない。
            echo 'catch Exception!', PHP_EOL;
            Yii::error($e);
//            Yii::getLogger()->log($e, 'error');
        }
//        Yii::getLogger()->flush(true);

        return ExitCode::OK;
    }
}

# PHP7.1
//2018-03-16 08:50:30 [-][-][-][error][application] Exception: test in /sample-php7/basic/commands/SampleController.php:34
//Stack trace:
//#0 [internal function]: app\commands\SampleController->actionIndex()
//#1 /sample-php7/basic/vendor/yiisoft/yii2/base/InlineAction.php(57): call_user_func_array(Array, Array)
//#2 /sample-php7/basic/vendor/yiisoft/yii2/base/Controller.php(157): yii\base\InlineAction->runWithParams(Array)
//#3 /sample-php7/basic/vendor/yiisoft/yii2/console/Controller.php(148): yii\base\Controller->runAction('', Array)
//#4 /sample-php7/basic/vendor/yiisoft/yii2/base/Module.php(528): yii\console\Controller->runAction('', Array)
//#5 /sample-php7/basic/vendor/yiisoft/yii2/console/Application.php(180): yii\base\Module->runAction('sample', Array)
//#6 /sample-php7/basic/vendor/yiisoft/yii2/console/Application.php(147): yii\console\Application->runAction('sample', Array)
//#7 /sample-php7/basic/vendor/yiisoft/yii2/base/Application.php(386): yii\console\Application->handleRequest(Object(yii\console\Request))
//#8 /sample-php7/basic/yii(20): yii\base\Application->run()
//#9 {main}
//2018-03-16 08:50:30 [-][-][-][info][application] $_GET = []
//
//$_POST = []
//
//$_FILES = []
//
//$_COOKIE = []
//
//$_SERVER = [
//    'PHP_INI_DIR' => '/usr/local/etc/php'
//    'HOSTNAME' => '109a6516f145'
//    'SHLVL' => '1'
//    'OLDPWD' => '/sample-php7/basic'
//    'HOME' => '/root'
//    'PHP_LDFLAGS' => '-Wl,-O1 -Wl,--hash-style=both -pie'
//    'PHP_MD5' => ''
//    'PHP_CFLAGS' => '-fstack-protector-strong -fpic -fpie -O2'
//    'PHP_VERSION' => '7.1.15'
//    'GPG_KEYS' => 'A917B1ECDA84AEC2B568FED6F50ABC807BD5DCD0 528995BFEDFBA7191D46839EF9BA0ADA31CBD89E 1729F83938DA44E27BA0F4D3DBDB397470D12172'
//    'PHP_ASC_URL' => 'https://secure.php.net/get/php-7.1.15.tar.xz.asc/from/this/mirror'
//    'PHP_CPPFLAGS' => '-fstack-protector-strong -fpic -fpie -O2'
//    'PHP_URL' => 'https://secure.php.net/get/php-7.1.15.tar.xz/from/this/mirror'
//    'TERM' => 'xterm'
//    'PATH' => '/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin'
//    'PWD' => '/sample-php7'
//    'PHPIZE_DEPS' => 'autoconf 		dpkg-dev dpkg 		file 		g++ 		gcc 		libc-dev 		make 		pkgconf 		re2c'
//    'PHP_SHA256' => '0e17192fb43532e4ebaa190ecec9c7e59deea7dadb7dab67b19c2081a68bd817'
//    'PHP_SELF' => 'basic/yii'
//    'SCRIPT_NAME' => 'basic/yii'
//    'SCRIPT_FILENAME' => 'basic/yii'
//    'PATH_TRANSLATED' => 'basic/yii'
//    'DOCUMENT_ROOT' => ''
//    'REQUEST_TIME_FLOAT' => 1521190230.6962
//    'REQUEST_TIME' => 1521190230
//    'argv' => [
//    0 => 'basic/yii'
//        1 => 'sample'
//    ]
//    'argc' => 2
//]



# PHP5.6
//2018-03-16 08:49:19 [-][-][-][error][application] exception 'Exception' with message 'test' in /sample-php7/basic/commands/SampleController.php:34
//Stack trace:
//#0 [internal function]: app\commands\SampleController->actionIndex()
//#1 /sample-php7/basic/vendor/yiisoft/yii2/base/InlineAction.php(57): call_user_func_array(Array, Array)
//#2 /sample-php7/basic/vendor/yiisoft/yii2/base/Controller.php(157): yii\base\InlineAction->runWithParams(Array)
//#3 /sample-php7/basic/vendor/yiisoft/yii2/console/Controller.php(148): yii\base\Controller->runAction('', Array)
//#4 /sample-php7/basic/vendor/yiisoft/yii2/base/Module.php(528): yii\console\Controller->runAction('', Array)
//#5 /sample-php7/basic/vendor/yiisoft/yii2/console/Application.php(180): yii\base\Module->runAction('sample', Array)
//#6 /sample-php7/basic/vendor/yiisoft/yii2/console/Application.php(147): yii\console\Application->runAction('sample', Array)
//#7 /sample-php7/basic/vendor/yiisoft/yii2/base/Application.php(386): yii\console\Application->handleRequest(Object(yii\console\Request))
//#8 /sample-php7/basic/yii(20): yii\base\Application->run()
//#9 {main}
//2018-03-16 08:49:19 [-][-][-][info][application] $_GET = []
//
//$_POST = []
//
//$_FILES = []
//
//$_COOKIE = []
//
//$_SERVER = [
//    'PHP_INI_DIR' => '/usr/local/etc/php'
//    'HOSTNAME' => '78d13fc9f7e3'
//    'SHLVL' => '1'
//    'OLDPWD' => '/'
//    'HOME' => '/root'
//    'PHP_LDFLAGS' => '-Wl,-O1 -Wl,--hash-style=both -pie'
//    'PHP_MD5' => ''
//    'PHP_CFLAGS' => '-fstack-protector-strong -fpic -fpie -O2'
//    'PHP_VERSION' => '5.6.34'
//    'GPG_KEYS' => '0BD78B5F97500D450838F95DFE857D9A90D90EC1 6E4F6AB321FDC07F2C332E3AC2BF0BC433CFC8B3'
//    'PHP_ASC_URL' => 'https://secure.php.net/get/php-5.6.34.tar.xz.asc/from/this/mirror'
//    'PHP_CPPFLAGS' => '-fstack-protector-strong -fpic -fpie -O2'
//    'PHP_URL' => 'https://secure.php.net/get/php-5.6.34.tar.xz/from/this/mirror'
//    'TERM' => 'xterm'
//    'PATH' => '/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin'
//    'PWD' => '/sample-php7'
//    'PHPIZE_DEPS' => 'autoconf 		dpkg-dev dpkg 		file 		g++ 		gcc 		libc-dev 		make 		pkgconf 		re2c'
//    'PHP_SHA256' => '21453be3a045204cd2717543ef42771324f411f40962ecda4fe841930a933128'
//    'PHP_SELF' => 'basic/yii'
//    'SCRIPT_NAME' => 'basic/yii'
//    'SCRIPT_FILENAME' => 'basic/yii'
//    'PATH_TRANSLATED' => 'basic/yii'
//    'DOCUMENT_ROOT' => ''
//    'REQUEST_TIME_FLOAT' => 1521190159.3572
//    'REQUEST_TIME' => 1521190159
//    'argv' => [
//    0 => 'basic/yii'
//        1 => 'sample'
//    ]
//    'argc' => 2
//]
