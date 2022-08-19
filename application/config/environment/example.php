<?php
return [
    /**
     * Base URL for non-http requests and all other cases when
     * the Base URL cannot be determined automatically from $_SERVER
     */
    'base_url' => 'http://someurl.com',
    'ssl_required' => true,

    /**
     * Doctrine configuration settings for Entity Manager
     * @link http://docs.doctrine-project.org/en/2.0.x/reference/configuration.html
     */
    'doctrine' => [
        'auto_generate_proxies' => false,
        'cache_class' => \Doctrine\Common\Cache\ApcuCache::class,
    ],

    'show_errors' => false,
];