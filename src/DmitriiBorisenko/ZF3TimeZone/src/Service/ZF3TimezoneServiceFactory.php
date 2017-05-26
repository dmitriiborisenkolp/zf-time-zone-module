<?php
namespace DmitriiBorisenko\ZF3TimeZone\Service;

use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;

final class ZF3TimeZoneServiceFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $config = $container->get('time_zone');

        return new ZF3TimeZoneService($config);
    }
}