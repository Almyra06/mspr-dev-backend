<?php

namespace ContainerTcxfcIV;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMentionsLegalesControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\MentionsLegalesController' shared autowired service.
     *
     * @return \App\Controller\MentionsLegalesController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'MentionsLegalesController.php';

        $container->services['App\\Controller\\MentionsLegalesController'] = $instance = new \App\Controller\MentionsLegalesController();

        $instance->setContainer(($container->privates['.service_locator.5nX7ca3'] ?? $container->load('get_ServiceLocator_5nX7ca3Service'))->withContext('App\\Controller\\MentionsLegalesController', $container));

        return $instance;
    }
}
