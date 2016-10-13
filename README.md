# Работа с m3u файлами.


### Требования:

- PHP >= 5.3


### Установка через composer:

- Добавьте проект в ваш файл composer.json:

```json
{
    "require": {
        "sergey-s-moiseev/m3u-playlist-parser": "dev-master"
    }
}
```
- Установите проект:

```bash
$ php composer.phar update sergey-s-moiseev/m3u-playlist-parser
```


### Пример работы:

```php
<?php
use M3uParser\M3uParser;

$m3uParser = new M3uParser();
$data = $m3uParser->parseFile('path_to.m3u');

foreach ($data as $entry) {
    var_dump($entry);
    /*
    object(M3uParser\Entry)#2 (2) {
      ["name":"M3uParser\Entry":private]=>
      string(37) "Everclear - So Much For The Afterglow"
      ["path":"M3uParser\Entry":private]=>
      string(31) "Alternative\everclear_SMFTA.mp3"
    }
    */

    echo $entry->getPath() . "\n"; // Путь к файлу в плейлисте
    echo $entry->getName() . "\n"; // Назание файла в плейлисте
}
```
