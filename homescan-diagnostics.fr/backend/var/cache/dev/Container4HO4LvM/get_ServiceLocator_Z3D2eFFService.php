<?php

namespace Container4HO4LvM;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Z3D2eFFService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Z3D2eFF' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Z3D2eFF'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'homePageRepository' => ['privates', 'App\\Repository\\HomePageRepository', 'getHomePageRepositoryService', true],
        ], [
            'homePageRepository' => 'App\\Repository\\HomePageRepository',
        ]);
    }
}
