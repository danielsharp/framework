<?php

$basePath = $app['path.base'];

return array_map('realpath', array(
    $basePath.'/vendor/laravel/framework/src/Illuminate/Support/ClassLoader.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Container/Container.php',
    $basePath.'/vendor/symfony/http-kernel/Symfony/Component/HttpKernel/HttpKernelInterface.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Foundation/Application.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Http/Request.php',
    $basePath.'/vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Request.php',
    $basePath.'/vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/ParameterBag.php',
    $basePath.'/vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/FileBag.php',
    $basePath.'/vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/ServerBag.php',
    $basePath.'/vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/HeaderBag.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Support/ServiceProvider.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Exception/ExceptionServiceProvider.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Routing/RoutingServiceProvider.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Events/EventServiceProvider.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Support/Str.php',
    $basePath.'/vendor/symfony/http-kernel/Symfony/Component/HttpKernel/Debug/ErrorHandler.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Config/Repository.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Support/NamespacedItemResolver.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Config/FileLoader.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Config/LoaderInterface.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Foundation/AliasLoader.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Foundation/ProviderRepository.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Cookie/CookieServiceProvider.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Database/DatabaseServiceProvider.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Encryption/EncryptionServiceProvider.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Filesystem/FilesystemServiceProvider.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Session/SessionServiceProvider.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/View/ViewServiceProvider.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Routing/Router.php',
    $basePath.'/vendor/symfony/routing/Symfony/Component/Routing/RouteCollection.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Workbench/WorkbenchServiceProvider.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Events/Dispatcher.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Model.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Support/Contracts/ArrayableInterface.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Support/Contracts/JsonableInterface.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Database/DatabaseManager.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Database/ConnectionResolverInterface.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Database/Connectors/ConnectionFactory.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Session/Store.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Session/SessionManager.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Support/Manager.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Session/CookieStore.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Cookie/CookieJar.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Encryption/Encrypter.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Support/Facades/Log.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Log/LogServiceProvider.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Log/Writer.php',
    $basePath.'/vendor/monolog/monolog/src/Monolog/Logger.php',
    $basePath.'/vendor/psr/log/Psr/Log/LoggerInterface.php',
    $basePath.'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php',
    $basePath.'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php',
    $basePath.'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php',
    $basePath.'/vendor/monolog/monolog/src/Monolog/Handler/RotatingFileHandler.php',
    $basePath.'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Support/Facades/App.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Exception/Handler.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Support/Facades/Route.php',
    $basePath.'/vendor/symfony/routing/Symfony/Component/Routing/Route.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Routing/Route.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/View/Engines/EngineResolver.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/View/ViewFinderInterface.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/View/FileViewFinder.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/View/Environment.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Support/Contracts/MessageProviderInterface.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Support/MessageBag.php',
    $basePath.'/vendor/symfony/routing/Symfony/Component/Routing/RequestContext.php',
    $basePath.'/vendor/symfony/routing/Symfony/Component/Routing/Matcher/UrlMatcherInterface.php',
    $basePath.'/vendor/symfony/routing/Symfony/Component/Routing/Matcher/UrlMatcher.php',
    $basePath.'/vendor/symfony/routing/Symfony/Component/Routing/RequestContextAwareInterface.php',
    $basePath.'/vendor/symfony/routing/Symfony/Component/Routing/RouteCompilerInterface.php',
    $basePath.'/vendor/symfony/routing/Symfony/Component/Routing/RouteCompiler.php',
    $basePath.'/vendor/symfony/routing/Symfony/Component/Routing/CompiledRoute.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Support/Facades/View.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Support/Contracts/RenderableInterface.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/View/View.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/View/Engines/EngineInterface.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/View/Engines/PhpEngine.php',
    $basePath.'/vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Response.php',
    $basePath.'/vendor/laravel/framework/src/Illuminate/Http/Response.php',
    $basePath.'/vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/ResponseHeaderBag.php',
    $basePath.'/vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Cookie.php'
));