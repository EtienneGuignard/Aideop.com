<?php

namespace ContainerN0rxKTb;


use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_FFI4YJIService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.FFI4YJI' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.FFI4YJI'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'entityManagerInterface' => ['services', 'doctrine.orm.default_entity_manager', 'getDoctrine_Orm_DefaultEntityManagerService', false],
            'surgeryNotificationRepository' => ['privates', 'App\\Repository\\SurgeryNotificationRepository', 'getSurgeryNotificationRepositoryService', true],
        ], [
            'entityManagerInterface' => '?',
            'surgeryNotificationRepository' => 'App\\Repository\\SurgeryNotificationRepository',
        ]);
    }
}
