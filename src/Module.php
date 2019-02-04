<?php
/**
 * Created by PhpStorm.
 * User: Nic
 * Date: 03/02/2019
 * Time: 23:01
 */

namespace Nybbl\ByteModule;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

/**
 * Class Module
 * @package Nybbl\ByteModule
 */
class Module implements ConfigProviderInterface
{
    const VERSION = '1.0.0';

    /**
     * @return array|mixed|\Traversable
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}