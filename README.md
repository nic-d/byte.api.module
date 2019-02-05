# Nybbl BYTE Module
A ZF3 module that integrates the BYTE API lib.

## Installation
```
$ composer require nybbl/byte-module
```

## Usage
To use this module, add it to your modules.config.php file:
```php
return [
    ...
    
    'Nybbl\ByteModule',
];
```

## Optional Config
If you want to further configure the module, copy the contents of this package's config/module.config.php
into config/autoload/nybbl.byte.config.php or into your config/autoload/global.php file.

```php
'byte_module' => [
    'client' => [
        'access_token' => '',
    ],
],
```