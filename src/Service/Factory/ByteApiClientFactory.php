<?php
/**
 * Created by PhpStorm.
 * User: Nic
 * Date: 04/02/2019
 * Time: 20:47
 */

namespace Nybbl\ByteModule\Service\Factory;

use Nybbl\Byte\Client;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

/**
 * Class ByteApiClientFactory
 * @package Nybbl\ByteModule
 */
class ByteApiClientFactory implements FactoryInterface
{
    /**
     * @param ContainerInterface $container
     * @param string $requestedName
     * @param array|null $options
     * @return Client|object
     * @throws \ErrorException
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $accessToken = $container->get('config')['byte_module']['client']['access_token'];
        return new Client($accessToken);
    }
}