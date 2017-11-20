# sample-php7

- PHP 5.6.x から PHP 7.0.x への移行を試すリポジトリ

# PHP 5.6.x から PHP 7.0.x への移行
- http://php.net/manual/ja/migration70.php

# 目次

- 下位互換性のない変更点
- 新機能
- PHP 7.0.x で推奨されなくなる機能
- 変更された関数
- 新しい関数
- 新しいクラスおよびインターフェイス
- 新しいグローバル定数
- SAPI モジュールの変更
- 削除された拡張モジュールおよび SAPI
- その他の変更

# 環境構築手順

## コンテナビルド
```shell
$ cd /path/to/sample-php7
$ docker-compose build
```

## コンテナ起動
```shell
$ cd /path/to/sample-php7
$ docker-compose up -d
```

## 動作確認
```shell
$ docker-compose exec php71 php -v
PHP 7.1.11 (cli) (built: Nov  4 2017 10:34:59) ( NTS )
Copyright (c) 1997-2017 The PHP Group
Zend Engine v3.1.0, Copyright (c) 1998-2017 Zend Technologies

$ docker-compose exec php56 php -v
PHP 5.6.32 (cli) (built: Nov  4 2017 11:38:21)
Copyright (c) 1997-2016 The PHP Group
Zend Engine v2.6.0, Copyright (c) 1998-2016 Zend Technologies
```