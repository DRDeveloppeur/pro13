<?php

namespace ContainerD5Tdey5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getProduitTypeService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Form\ProduitType' shared autowired service.
     *
     * @return \App\Form\ProduitType
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
        include_once \dirname(__DIR__, 4).'/src/Form/ProduitType.php';

        return $container->privates['App\\Form\\ProduitType'] = new \App\Form\ProduitType();
    }
}
