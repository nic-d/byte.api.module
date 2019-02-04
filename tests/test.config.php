<?php
/**
 * Created by PhpStorm.
 * User: Nic
 * Date: 04/02/2019
 * Time: 22:43
 */
return [
    'modules' => [
        'Zend\Router',
        'Nybbl\ByteModule',
    ],

    'module_listener_options' => [
        'config_glob_paths' => [
            __DIR__ . '/../config/module.config.php',
        ],
        'module_paths' => [],
    ],
];