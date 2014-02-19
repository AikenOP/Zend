<?php
/**
 * 
 * @package Trabajo
 */
return array(
    'controllers' => array(
        'invokables' => array(
            'Trabajo\Controller\Trabajo' => 'Trabajo\Controller\TrabajoController',
        ),
    ),

    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'trabajo' => array(
                'type'    => 'segment',
                'options' => array(
                    'route'    => '/trabajo[/:action][/:id]',
                    'constraints' => array(
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'id'     => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Trabajo\Controller\Trabajo',
                        'action'     => 'index',
                        'action'     => 'search',
                        'action'     => 'recent',
                    ),
                ),
            ),
        ),
    ),

    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'layout/test'             => __DIR__ . '/../view/layout/testLayout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),   
        'template_path_stack' => array(
            'trabajo' => __DIR__ . '/../view',
        ),
    ),
);
?>
