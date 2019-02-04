<?php
/**
 * Created by PhpStorm.
 * User: Nic
 * Date: 04/02/2019
 * Time: 20:59
 */

use Nybbl\Byte\Client;
use PHPUnit\Framework\TestCase;
use Nybbl\ByteModule\Service\Factory\ByteApiClientFactory;

class ByteApiClientFactoryTest extends TestCase
{
    /** @var \Zend\ServiceManager\ServiceManager $sm */
    protected $sm;

    public function setUp()
    {
        $bootstrap = \Zend\Mvc\Application::init(include __DIR__ . '/test.config.php');
        $this->sm = $bootstrap->getServiceManager();
    }

    public function test_factory_returns_api_client()
    {
        $factory = new ByteApiClientFactory();
        $clientClass = $factory($this->sm, ByteApiClientFactory::class);

        $this->assertInstanceOf(Client::class, $clientClass);
    }
}