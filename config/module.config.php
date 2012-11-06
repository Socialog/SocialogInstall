<?php

return array(
    
    /**
     * Router
     */
	'router' => array(
		'routes' => array(
			'socialog-install' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/install[/:action]',
                    'constraints' => array(
                        'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                        'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                    ),
                    'defaults' => array(
                        'controller'	=> 'socialog_install',
                        'action'		=> 'index',
                    ),
                ),
            ),
		),
	),
	
	'controllers' => array(
		'invokables' => array(
			'socialog_install' => 'SocialogInstall\Controller\InstallController',
		),
	),

    /**
     * ViewManager Configuration
     */
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    
    'socialog-install' => array(
        'templates' => array(
            'database' => include __DIR__ . '/template/database.php',
        ),
        'data' => array(
            'mysql' => __DIR__ . '/../data/install_mysql.sql',
        ),
    ),
);
