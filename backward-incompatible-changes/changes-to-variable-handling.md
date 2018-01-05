# 変数の取り扱いの変更

| 式	 | PHP 5 での解釈 | PHP 7 での解釈 |
| ----- | ----- | ----- |
| $$foo['bar']['baz'] | ${$foo['bar']['baz']} | ($$foo)['bar']['baz'] |
| $foo->$bar['baz'] | $foo->{$bar['baz']} | ($foo->$bar)['baz'] |
| $foo->$bar['baz']() | $foo->{$bar['baz']}() | ($foo->$bar)['baz']() |
| Foo::$bar['baz']() | Foo::{$bar['baz']}() | (Foo::$bar)['baz']() |
