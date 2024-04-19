<?php

namespace ContainerRtUvGcC;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Sd2T75VService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.sd2T75V' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.sd2T75V'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'RAATRepository' => ['privates', 'App\\Repository\\RAATRepository', 'getRAATRepositoryService', true],
        ], [
            'RAATRepository' => 'App\\Repository\\RAATRepository',
        ]);
    }
}
