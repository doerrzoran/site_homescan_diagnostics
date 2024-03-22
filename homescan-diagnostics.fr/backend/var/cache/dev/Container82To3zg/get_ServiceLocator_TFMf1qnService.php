<?php

namespace Container82To3zg;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TFMf1qnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.tFMf1qn' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.tFMf1qn'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'DTATRepository' => ['privates', 'App\\Repository\\DTATRepository', 'getDTATRepositoryService', true],
        ], [
            'DTATRepository' => 'App\\Repository\\DTATRepository',
        ]);
    }
}
