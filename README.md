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
into config/autoload/nybbl.access.acl.config.php or into your config/autoload/global.php file.

```php
'access_manager' => [
    'redirect_route_name' => 'application.home',
    'default_access_all_role' => 'Guest',
],
```

Config key descriptions:
- redirect_route_name: The route name where the application should redirect.
For example, you might want unauthorised users to be redirect to "user.login". 

- default_access_all_role: The default role. If there's no identity in the AuthenticationService,
then the default role is "Guest".