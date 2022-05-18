# Утилиты для работы с mb строками

В пакете собраны некоторые функции, которых нет штатно в php

## Требования

php > 7.0

## Устнановка

```bash
composer require pshilyaev/mbtools-package
```

## Использование

```php
$mtools = new MbTools();
echo "Trim:|".$mtools->trim("  test ").'|'.PHP_EOL;
echo "Left trim:|".$mtools->ltrim("  test ").'|'.PHP_EOL;
echo "Right trim:|".$mtools->rtrim("  test ").'|'.PHP_EOL;
```
