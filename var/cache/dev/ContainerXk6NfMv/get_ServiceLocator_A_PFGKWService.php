<?php

namespace ContainerXk6NfMv;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_A_PFGKWService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.A.pFGKW' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.A.pFGKW'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'concert' => ['privates', '.errored..service_locator.A.pFGKW.App\\Entity\\Concert', NULL, 'Cannot autowire service ".service_locator.A.pFGKW": it references class "App\\Entity\\Concert" but no such service exists.'],
        ], [
            'concert' => 'App\\Entity\\Concert',
        ]);
    }
}
