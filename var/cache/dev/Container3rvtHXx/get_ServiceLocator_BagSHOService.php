<?php

namespace Container3rvtHXx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_BagSHOService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Bag_SHO' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Bag_SHO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'article' => ['privates', '.errored..service_locator.Bag_SHO.App\\Entity\\Article', NULL, 'Cannot autowire service ".service_locator.Bag_SHO": it references class "App\\Entity\\Article" but no such service exists.'],
        ], [
            'article' => 'App\\Entity\\Article',
        ]);
    }
}
