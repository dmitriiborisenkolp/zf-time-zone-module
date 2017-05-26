<?php
namespace DmitriiBorisenko\ZF3TimeZone;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

final class Module implements ConfigProviderInterface
{
    public function getConfig()
    {
        return array_merge_recursive(
            require __DIR__ . '/../config/module.config.php'
        );
    }
}