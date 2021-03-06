<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Environment
    |--------------------------------------------------------------------------
    */
    'env' => 'dev',
    'isDev' => true,
    'isCli' => \php_sapi_name() === 'cli',

    /*
   |--------------------------------------------------------------------------
   | Whoops
   |--------------------------------------------------------------------------
   */
    'whoops-catch-errors' => true,

    /*
    |--------------------------------------------------------------------------
    | Http Factories
    |--------------------------------------------------------------------------
    */
    'server-request-factory-class' => \Inferno\Http\Request\ServerRequestFactory::class,
    'response-factory-class' => \Inferno\Http\Response\ResponseFactory::class,
    'uri-factory-class' => \Inferno\Http\Uri\UriFactory::class,

    /*
    |--------------------------------------------------------------------------
    | Service Provider
    |--------------------------------------------------------------------------
    */
    'providers' => [
        \Inferno\Http\HttpServiceProvider::class,
        \Inferno\Console\ConsoleServiceProvider::class,
        \Inferno\Doctrine\DoctrineServiceProvider::class,
        \Inferno\Whoops\WhoopsServiceProvider::class,
        \Inferno\Filesystem\FilesystemServiceProvider::class,
        \Inferno\HttpFoundation\HttpFoundationServiceProvider::class,
        \Inferno\HttpRequestHandler\HttpRequestHandlerServiceProvider::class,
        \Inferno\Language\LanguageServiceProvider::class,
        \Inferno\Monolog\MonologServiceProvider::class,
        \Inferno\Routing\RoutingServiceProvider::class,
        \Inferno\Session\SessionServiceProvider::class,
        \Inferno\Translation\TranslationServiceProvider::class,
        \Inferno\Renderer\RendererServiceProvider::class,
        \Inferno\Predis\PredisServiceProvider::class,
        \Inferno\Validation\ValidationServiceProvider::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Middleware
    |--------------------------------------------------------------------------
    */
    'middleware-runner' => \Inferno\HttpRequestHandler\Runner\Runner::class,
    'middlewares' => [
        \Inferno\Monolog\Middleware\ExceptionLoggerMiddleware::class,
        \TheCodingMachine\Middlewares\CsrfHeaderCheckMiddlewareFactory::createDefault(),
        \Inferno\Whoops\Middleware\WhoopsMiddleware::class,
        \Inferno\Language\Middleware\LanguageDetectorMiddleware::class,
        \Inferno\Session\Middleware\StartSessionMiddleware::class,
        \Inferno\Routing\Middleware\DispatcherMiddleware::class,
        \GC\App\Middleware\SetCurrentUserMiddleware::class,
        \GC\App\Middleware\AuthorizationMiddleware::class,
        \GC\App\Middleware\SetCurrentUniverseMiddleware::class,
        \GC\App\Middleware\SetCurrentPlayerMiddleware::class,
        \GC\App\Middleware\SetTwigGlobalsMiddleware::class,
        \GC\App\Middleware\AuthorizationUniverseMiddleware::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Routing
    |--------------------------------------------------------------------------
    */
    'next-middleware-on-not-found' => false,
    'invocation-strategy' => \Inferno\Routing\Strategy\MultipleContainerHandlerStrategy::class,
    'router-chain' => [
        \Inferno\Routing\Router\Router::class
    ],

    /*
    |--------------------------------------------------------------------------
    | Doctrine
    |--------------------------------------------------------------------------
    */
    'doctrine-migration-dir' => '%baseDir%/database/migrations',
    'doctrine-proxy-dir' => '%baseDir%/database/proxies',
    'doctrine-fixture-dir' => '%baseDir%/database/fixtures',
    'doctrine-entity-dir' => [
        '%baseDir%/src'
    ],
    'doctrine-is-dev' => true,
    'doctrine-cache' => \Doctrine\Common\Cache\PredisCache::class,
    'doctrine-config' => [
        'host' => 'localhost',
        'user' => 'dev',
        'password' => 'dev',
        'dbname' => 'gc',
    ],

    /*
   |--------------------------------------------------------------------------
   | Monolog
   |--------------------------------------------------------------------------
   */
    'monolog-log' => '%baseDir%/data/logs/exception.log',
    'monolog-format' => "[%datetime%] [%level_name%] %message% %context% %extra%\n",
    'monolog-level' => \Monolog\Logger::DEBUG,
    'monolog-fields' => [
        'url' => 'REQUEST_URI',
        'ip' => 'REMOTE_ADDR',
        'method' => 'REQUEST_METHOD',
        'referrer' => 'HTTP_REFERER'
    ],

    /*
   |--------------------------------------------------------------------------
   | Translation
   |--------------------------------------------------------------------------
   */
    'translation-file-globs' => [
        '%baseDir%/data/translations/*.ini',
        '%baseDir%/src/*/Translations/*.ini',
        '%baseDir%/vendor/inferno/*/src/Translations/*.ini',
    ],

    /*
    |--------------------------------------------------------------------------
    | Language
    |--------------------------------------------------------------------------
    */
    'language-fallback' => 'en',
    'language-current' => 'en',

    // route prefix => iso language code (translation filename)
    'language-available' => [
        'en' => 'en_EN',
        'de' => 'de-DE',
    ],

    /*
    |--------------------------------------------------------------------------
    | Renderer
    |--------------------------------------------------------------------------
    */
    'template-cache' => false,
    'template-cache-dir' => '%baseDir%/data/cache/twig',
    'template-dir-globs' => [
        '%baseDir%/src/*/Templates',
    ],

    /*
    |--------------------------------------------------------------------------
    | Redis
    |--------------------------------------------------------------------------
    */
    'redis-host' => 'localhost',
    'redis-port' => 6379,
];
