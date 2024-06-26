<?php

namespace ContainerHPxtjxw;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_EIM8GSsService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.EIM8GSs' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.EIM8GSs'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService ??= $container->getService(...), [
            'leadRepository' => ['privates', 'App\\Repository\\LeadRepository', 'getLeadRepositoryService', true],
        ], [
            'leadRepository' => 'App\\Repository\\LeadRepository',
        ]);
    }
}
