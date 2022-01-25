<?php

namespace ContainerC7EYX7S;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_5wZKjk8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.5wZKjk8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.5wZKjk8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cpsCardOwnerRepository' => ['privates', 'App\\Repository\\CpsCardOwnerRepository', 'getCpsCardOwnerRepositoryService', true],
            'entityManagerInterface' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
        ], [
            'cpsCardOwnerRepository' => 'App\\Repository\\CpsCardOwnerRepository',
            'entityManagerInterface' => '?',
        ]);
    }
}