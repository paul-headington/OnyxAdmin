<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'OnyxAdmin\Controller\Admin' => 'OnyxAdmin\Controller\AdminController',
        ),
    ),
    // The following section is new and should be added to your file
    'router' => array(
        'routes' => array(
            'admin' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/admin',
                    'defaults' => array(
                        '__NAMESPACE__' => 'OnyxAdmin\Controller',
                        'controller'    => 'admin',
                        'action'        => 'index',
                    ),
                ),
            ),           

        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'onyxadmin' => __DIR__ . '/../view',
        ),
    ),
    'service_manager'=> array(
        'abstract_factories' => array(
        ),
    ),
);
