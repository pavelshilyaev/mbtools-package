# Утилиты для работы с mb строками

В пакете собраны некоторые функции, которых нет штатно в php: mb_trim, mb_ltrim и mb_rtrim. Пакет не содержит никаких дополнительных зависимостей.

## Требования

php >= 7.0

## Устнановка

```bash
$ composer require pshilyaev/mbtools-package
```

## Использование

```php
use Pshilyaev\Mbtools\MbTools;
require __DIR__ .'/vendor/autoload.php';

$mtools = new MbTools();
echo "Trim:|".$mtools->trim("  test ").'|'.PHP_EOL;
echo "Left trim:|".$mtools->ltrim("  test ").'|'.PHP_EOL;
echo "Right trim:|".$mtools->rtrim("  test ").'|'.PHP_EOL;
```
