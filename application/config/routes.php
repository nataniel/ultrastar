<?php
/**
 * The routes are matched from LAST to FIRST !!
 */
return [
    /**
     * Errors route
     */
    'errors' => [
        'type'    => E4u\Application\Router\Route::class,
        'options' => [
            'route'    => '/:controller[/:action[/:id]]',
            'constraints' => [
                'controller' => '\w[\w\-]*',
                'action'     => '\w[\w\-]*',
                'id'          => '\d+',
            ],
            'defaults' => [
                'module'     => null,
                'controller' => 'index',
                'action'     => 'index',
            ],
        ],
    ],

    /**
     * Default route
     * @example /site/pages/show/1
     */
    'default' => [
        'type'    => E4u\Application\Router\Route::class,
        'options' => [
            'route'    => '/:module[/:controller[/:action[/:id[/:param-1[/:param-2[/:param-3]]]]]]',
            'constraints' => [
                'module'     => 'site|admin|hurt|publishing|stock|shop',
                'controller' => '\w[\w\-]*',
                'action'     => '\w[\w\-]*',
                'id'          => '\d+',
            ],
            'defaults' => [
                'controller' => 'index',
                'action'     => 'index',
            ],
        ],
    ],

    /**
     * Home page route
     */
    'home' => [
        'type' => E4u\Application\Router\Literal::class,
        'options' => [
            'route'    => '/',
            'defaults' => [
                'module'     => null,
                'controller' => 'index',
                'action'     => 'index',
            ],
        ],
    ],
];