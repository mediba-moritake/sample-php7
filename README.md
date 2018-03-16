# sample-php7
- PHP 5.6.x から PHP 7.0.x への移行を試すリポジトリ

# PHP Supported Versions
- http://php.net/supported-versions.php

# PHP 5.6.x から PHP 7.0.x への移行
- http://php.net/manual/ja/migration70.php

# 目次

## 下位互換性のない変更点
- [エラーや例外の取り扱いの変更](./backward-incompatible-changes/errors-in-php-7.md)
- [変数の取り扱いの変更](./backward-incompatible-changes/changes-to-variable-handling.md)
- [foreach の変更](./backward-incompatible-changes/changes-to-foreach.php)

## 新機能
- [スカラー型宣言](./new-features/scalar-type-declarations.php)
- [戻り値の型宣言](./new-features/return-type-declarations.php)
- [宇宙船演算子](./new-features/spaceship-operator.php)

## ログ出力

- [Yii1 でのログ出力サンプル](./yii1/testdrive/protected/commands/SampleCommand.php)
```shell
$ docker-compose exec php71 /sample-php7/yii1/testdrive/protected/yiic sample index
$ docker-compose exec php56 /sample-php7/yii1/testdrive/protected/yiic sample index
```

- [Yii2 でのログ出力サンプル](./yii2/basic/commands/SampleController.php)
```shell
$ docker-compose exec php71 /sample-php7/yii2/basic/yii sample
$ docker-compose exec php56 /sample-php7/yii2/basic/yii sample
```

## Amazon ElastiCache Cluster Client

- [AWS ElastiCache ノードの自動検出 (Memcached)](https://docs.aws.amazon.com/ja_jp/AmazonElastiCache/latest/UserGuide/AutoDiscovery.html)
- [PHP7.0 の Amazon ElastiCache Cluster Client をダウンロード](https://elasticache-downloads.s3.amazonaws.com/ClusterClient/PHP-7.0/latest-64bit)
- [PHP5.6 の Amazon ElastiCache Cluster Client をダウンロード](https://elasticache-downloads.s3.amazonaws.com/ClusterClient/PHP-5.6/latest-64bit)



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
PHP 7.1.15 (cli) (built: Mar  6 2018 01:48:53) ( NTS )
Copyright (c) 1997-2018 The PHP Group
Zend Engine v3.1.0, Copyright (c) 1998-2018 Zend Technologies

$ docker-compose exec php56 php -v
PHP 5.6.34 (cli) (built: Mar  5 2018 23:39:09)
Copyright (c) 1997-2016 The PHP Group
Zend Engine v2.6.0, Copyright (c) 1998-2016 Zend Technologies
```