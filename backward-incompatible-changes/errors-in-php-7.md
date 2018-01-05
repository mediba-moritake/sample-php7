# PHP 7 でのエラー

- [Throwable](http://www.php.net/manual/ja/class.throwable.php)
    - PHP 7 からの新しいインターフェースで、全ての例外の基底インターフェース
    - Exception、Error は、これを実装している

- [Exception](http://www.php.net/manual/ja/class.exception.php)
    - PHP 5 ではすべての例外の基底クラス
    - PHP 7 では、すべてのユーザー例外の基底クラス
    - PHP 7 では、Throwable インターフェイスを実装している

- [Error](http://www.php.net/manual/ja/class.error.php)
    - PHP 7 からの新しいクラスで、内部例外の基底クラス
    - Throwable インターフェイスを実装している

## PHP 7 での内部エラー

- 大半の PHP 内部エラーは、Error 例外としてスローされる
- catch ブロックでマッチしない場合、set_exception_handler() で設定した例外ハンドラが呼ばれる
- これもない場合、今までの fatal error に変換される

## Error の階層

- Throwable
    - Exception
        - RuntimeException
        - ErrorException
        - ...
    - Error
        - ParseError
        - TypeError
            - ArgumentCountError
        - ...
