<?php

namespace ContainerXk6NfMv;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator__36X1M_Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator..36X1M.' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator..36X1M.'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'concertRepo' => ['privates', 'App\\Repository\\ConcertRepository', 'getConcertRepositoryService', true],
        ], [
            'concertRepo' => 'App\\Repository\\ConcertRepository',
        ]);
    }
}
