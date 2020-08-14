<?php

namespace Container3rvtHXx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Jm13fzDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Jm13fzD' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Jm13fzD'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\AdminController::articleDelete' => ['privates', '.service_locator.Bag_SHO', 'get_ServiceLocator_BagSHOService', true],
            'App\\Controller\\AdminController::articleEdit' => ['privates', '.service_locator.Bag_SHO', 'get_ServiceLocator_BagSHOService', true],
            'App\\Controller\\AdminController::articles' => ['privates', '.service_locator.IfOtLpd', 'get_ServiceLocator_IfOtLpdService', true],
            'App\\Controller\\AdminController::categorie' => ['privates', '.service_locator.nSLHan9', 'get_ServiceLocator_NSLHan9Service', true],
            'App\\Controller\\AdminController::categoryDelete' => ['privates', '.service_locator.57pSehj', 'get_ServiceLocator_57pSehjService', true],
            'App\\Controller\\AdminController::categoryEdit' => ['privates', '.service_locator.57pSehj', 'get_ServiceLocator_57pSehjService', true],
            'App\\Controller\\AdminController::contactDelete' => ['privates', '.service_locator.S6iF3Lw', 'get_ServiceLocator_S6iF3LwService', true],
            'App\\Controller\\AdminController::contactEdit' => ['privates', '.service_locator.S6iF3Lw', 'get_ServiceLocator_S6iF3LwService', true],
            'App\\Controller\\AdminController::contacts' => ['privates', '.service_locator.OR50o4A', 'get_ServiceLocator_OR50o4AService', true],
            'App\\Controller\\AdminController::produit' => ['privates', '.service_locator.jAdlZ9v', 'get_ServiceLocator_JAdlZ9vService', true],
            'App\\Controller\\AdminController::produitDelete' => ['privates', '.service_locator.3zcMOVM', 'get_ServiceLocator_3zcMOVMService', true],
            'App\\Controller\\AdminController::produitEdit' => ['privates', '.service_locator.3zcMOVM', 'get_ServiceLocator_3zcMOVMService', true],
            'App\\Controller\\ArticleController::index' => ['privates', '.service_locator.Zr91eP6', 'get_ServiceLocator_Zr91eP6Service', true],
            'App\\Controller\\ArticleController::show' => ['privates', '.service_locator.JNB1nmX', 'get_ServiceLocator_JNB1nmXService', true],
            'App\\Controller\\CategorieController::index' => ['privates', '.service_locator.9aMSQQN', 'get_ServiceLocator_9aMSQQNService', true],
            'App\\Controller\\CategorieController::show' => ['privates', '.service_locator.57pSehj', 'get_ServiceLocator_57pSehjService', true],
            'App\\Controller\\HomeController::index' => ['privates', '.service_locator.jAdlZ9v', 'get_ServiceLocator_JAdlZ9vService', true],
            'App\\Controller\\ProduitController::index' => ['privates', '.service_locator.VP68NKc', 'get_ServiceLocator_VP68NKcService', true],
            'App\\Controller\\ProduitController::show' => ['privates', '.service_locator.3zcMOVM', 'get_ServiceLocator_3zcMOVMService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\AdminController:articleDelete' => ['privates', '.service_locator.Bag_SHO', 'get_ServiceLocator_BagSHOService', true],
            'App\\Controller\\AdminController:articleEdit' => ['privates', '.service_locator.Bag_SHO', 'get_ServiceLocator_BagSHOService', true],
            'App\\Controller\\AdminController:articles' => ['privates', '.service_locator.IfOtLpd', 'get_ServiceLocator_IfOtLpdService', true],
            'App\\Controller\\AdminController:categorie' => ['privates', '.service_locator.nSLHan9', 'get_ServiceLocator_NSLHan9Service', true],
            'App\\Controller\\AdminController:categoryDelete' => ['privates', '.service_locator.57pSehj', 'get_ServiceLocator_57pSehjService', true],
            'App\\Controller\\AdminController:categoryEdit' => ['privates', '.service_locator.57pSehj', 'get_ServiceLocator_57pSehjService', true],
            'App\\Controller\\AdminController:contactDelete' => ['privates', '.service_locator.S6iF3Lw', 'get_ServiceLocator_S6iF3LwService', true],
            'App\\Controller\\AdminController:contactEdit' => ['privates', '.service_locator.S6iF3Lw', 'get_ServiceLocator_S6iF3LwService', true],
            'App\\Controller\\AdminController:contacts' => ['privates', '.service_locator.OR50o4A', 'get_ServiceLocator_OR50o4AService', true],
            'App\\Controller\\AdminController:produit' => ['privates', '.service_locator.jAdlZ9v', 'get_ServiceLocator_JAdlZ9vService', true],
            'App\\Controller\\AdminController:produitDelete' => ['privates', '.service_locator.3zcMOVM', 'get_ServiceLocator_3zcMOVMService', true],
            'App\\Controller\\AdminController:produitEdit' => ['privates', '.service_locator.3zcMOVM', 'get_ServiceLocator_3zcMOVMService', true],
            'App\\Controller\\ArticleController:index' => ['privates', '.service_locator.Zr91eP6', 'get_ServiceLocator_Zr91eP6Service', true],
            'App\\Controller\\ArticleController:show' => ['privates', '.service_locator.JNB1nmX', 'get_ServiceLocator_JNB1nmXService', true],
            'App\\Controller\\CategorieController:index' => ['privates', '.service_locator.9aMSQQN', 'get_ServiceLocator_9aMSQQNService', true],
            'App\\Controller\\CategorieController:show' => ['privates', '.service_locator.57pSehj', 'get_ServiceLocator_57pSehjService', true],
            'App\\Controller\\HomeController:index' => ['privates', '.service_locator.jAdlZ9v', 'get_ServiceLocator_JAdlZ9vService', true],
            'App\\Controller\\ProduitController:index' => ['privates', '.service_locator.VP68NKc', 'get_ServiceLocator_VP68NKcService', true],
            'App\\Controller\\ProduitController:show' => ['privates', '.service_locator.3zcMOVM', 'get_ServiceLocator_3zcMOVMService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\AdminController::articleDelete' => '?',
            'App\\Controller\\AdminController::articleEdit' => '?',
            'App\\Controller\\AdminController::articles' => '?',
            'App\\Controller\\AdminController::categorie' => '?',
            'App\\Controller\\AdminController::categoryDelete' => '?',
            'App\\Controller\\AdminController::categoryEdit' => '?',
            'App\\Controller\\AdminController::contactDelete' => '?',
            'App\\Controller\\AdminController::contactEdit' => '?',
            'App\\Controller\\AdminController::contacts' => '?',
            'App\\Controller\\AdminController::produit' => '?',
            'App\\Controller\\AdminController::produitDelete' => '?',
            'App\\Controller\\AdminController::produitEdit' => '?',
            'App\\Controller\\ArticleController::index' => '?',
            'App\\Controller\\ArticleController::show' => '?',
            'App\\Controller\\CategorieController::index' => '?',
            'App\\Controller\\CategorieController::show' => '?',
            'App\\Controller\\HomeController::index' => '?',
            'App\\Controller\\ProduitController::index' => '?',
            'App\\Controller\\ProduitController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\AdminController:articleDelete' => '?',
            'App\\Controller\\AdminController:articleEdit' => '?',
            'App\\Controller\\AdminController:articles' => '?',
            'App\\Controller\\AdminController:categorie' => '?',
            'App\\Controller\\AdminController:categoryDelete' => '?',
            'App\\Controller\\AdminController:categoryEdit' => '?',
            'App\\Controller\\AdminController:contactDelete' => '?',
            'App\\Controller\\AdminController:contactEdit' => '?',
            'App\\Controller\\AdminController:contacts' => '?',
            'App\\Controller\\AdminController:produit' => '?',
            'App\\Controller\\AdminController:produitDelete' => '?',
            'App\\Controller\\AdminController:produitEdit' => '?',
            'App\\Controller\\ArticleController:index' => '?',
            'App\\Controller\\ArticleController:show' => '?',
            'App\\Controller\\CategorieController:index' => '?',
            'App\\Controller\\CategorieController:show' => '?',
            'App\\Controller\\HomeController:index' => '?',
            'App\\Controller\\ProduitController:index' => '?',
            'App\\Controller\\ProduitController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}