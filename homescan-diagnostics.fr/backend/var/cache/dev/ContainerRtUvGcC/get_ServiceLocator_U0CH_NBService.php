<?php

namespace ContainerRtUvGcC;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_U0CH_NBService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.U0CH.NB' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.U0CH.NB'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'DTADRepository' => ['privates', 'App\\Repository\\DTADRepository', 'getDTADRepositoryService', true],
        ], [
            'DTADRepository' => 'App\\Repository\\DTADRepository',
        ]);
    }
}
