<?php
// unserialize() のフィルタリング

// オブジェクトはすべて、__PHP_Incomplete_Class のオブジェクトに変換します
$data = unserialize($foo, ["allowed_classes" => false]);

// MyClassとMyClass2以外のすべてのオブジェクトを、__PHP_Incomplete_Class のオブジェクトに変換します
$data = unserialize($foo, ["allowed_classes" => ["MyClass", "MyClass2"]]);

// デフォルト (第二引数を省略した場合) の挙動は以下のようになり、すべてのオブジェクトをそのまま復元します
$data = unserialize($foo, ["allowed_classes" => true]);
