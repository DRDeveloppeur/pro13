<?php

namespace ContainerD5Tdey5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_OR50o4AService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.OR50o4A' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.OR50o4A'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'repo' => ['privates', 'App\\Repository\\ContactRepository', 'getContactRepositoryService', true],
        ], [
            'repo' => 'App\\Repository\\ContactRepository',
        ]);
    }
}
