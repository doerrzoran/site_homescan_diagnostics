<?php

namespace ContainerHPxtjxw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Og5AxXcService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.og5AxXc' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.og5AxXc'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'energyRepository' => ['privates', 'App\\Repository\\EnergyRepository', 'getEnergyRepositoryService', true],
        ], [
            'energyRepository' => 'App\\Repository\\EnergyRepository',
        ]);
    }
}
