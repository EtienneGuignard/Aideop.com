<?php

namespace ContainerU5mYool;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_YvIuFrfService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.yvIuFrf' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.yvIuFrf'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cpsCardOwnerRepository' => ['privates', 'App\\Repository\\CpsCardOwnerRepository', 'getCpsCardOwnerRepositoryService', true],
        ], [
            'cpsCardOwnerRepository' => 'App\\Repository\\CpsCardOwnerRepository',
        ]);
    }
}
