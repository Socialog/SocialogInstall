<?php

return array(

	'router' => array(
		'routes' => array(
//			'socialog-install-catchall' => array(
//				'type' => 'regex',
//				'priority' => 1000,
//				'options' => array(
//					'regex' => '/(?<catchall>.*)',
//					'defaults' => array(
//						'controller'	=> 'socialog_install',
//						'action'		=> 'index',
//					),
//					'spec' => '/%catchall%',
//				),
//			),
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
);
