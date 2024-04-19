<?php

namespace ContainerRtUvGcC;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BcZ6kEiService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.BcZ6kEi' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.BcZ6kEi'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'electricityRepository' => ['privates', 'App\\Repository\\ElectricityRepository', 'getElectricityRepositoryService', true],
        ], [
            'electricityRepository' => 'App\\Repository\\ElectricityRepository',
        ]);
    }
}
