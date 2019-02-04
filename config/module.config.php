<?php
/**
 * Created by PhpStorm.
 * User: Nic
 * Date: 03/02/2019
 * Time: 23:02
 */

use Nybbl\Byte;
use Nybbl\ByteModule\Service;

return [
    'service_manager' => [
        'factories' => [
            Byte\Client::class => Service\Factory\ByteApiClientFactory::class,
        ],

        'aliases' => [
            'byte' => Byte\Client::class,
            'Byte' => Byte\Client::class,
            'byteClient' => Byte\Client::class,
        ],
    ],

    'byte_module' => [
        'client' => [
            'access_token' => '',
        ],
    ],
];