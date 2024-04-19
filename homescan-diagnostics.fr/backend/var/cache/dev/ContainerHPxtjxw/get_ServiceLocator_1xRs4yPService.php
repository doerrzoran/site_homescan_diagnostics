<?php

namespace ContainerHPxtjxw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_1xRs4yPService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.1xRs4yP' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.1xRs4yP'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'ERPRepository' => ['privates', 'App\\Repository\\ERPRepository', 'getERPRepositoryService', true],
        ], [
            'ERPRepository' => 'App\\Repository\\ERPRepository',
        ]);
    }
}
