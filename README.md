PHPFacile! Zend-db-ext
==================

A zend-db extension.

Installation
-----
At the root of your project type
```
composer require phpfacile/zend-db-ext
```
Or add "phpfacile/zend-db-ext": "^1.0" to the "require" part of your composer.json file
```composer
"require": {
    "phpfacile/zend-db-ext": "^1.0"
}
```

Usage
-----
```
use PHPFacile\Zend\Db\Helper\ZendDbHelper;

$expression = ZendDbHelper::getUTCTimestampExpression($adapter);
```
This will return
* __new Expression('UTC_TIMESTAMP()');__ in case of __MySQL__
* __new Expression('datetime(\'now\')');__ in case of __SQLite__
