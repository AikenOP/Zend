<?php
/**
 * Module Bootstrap
 *
 * @package Trabajo
 */
namespace Trabajo;

/**
 * Module Bootstrap
 *
 * @package Trabajo
 */
class Module
{

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php',
            ),
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/src/' . __NAMESPACE__,
                ),
            ),
        );
    }

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }

    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'db-adapter' => function($sm) {
                    return $sm->get('db');
                },
            ),
        );
    }
}