<?php
/**
 * Core file loader
 *
 * @package BEAR.Framework
 * @license http://opensource.org/licenses/bsd-license.php BSD
 *
 * @global  $system system path
 */
namespace BEAR\Sunday\Scripts;

use BEAR\Sunday\Framework\Framework;

$er = error_reporting();
error_reporting(0);
$system = dirname(__DIR__);
include $system . '/vendor/doctrine/common/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
include $system . '/vendor/Ray/Di/src/Ray/Di/AbstractModule.php';
include $system . '/vendor/Ray/Di/src/Ray/Di/Scope.php';
include $system . '/vendor/doctrine/common/lib/Doctrine/Common/Annotations/Reader.php';
include $system . '/vendor/doctrine/common/lib/Doctrine/Common/Annotations/AnnotationReader.php';
include $system . '/vendor/doctrine/common/lib/Doctrine/Common/Annotations/DocParser.php';
include $system . '/vendor/doctrine/common/lib/Doctrine/Common/Lexer.php';
include $system . '/vendor/doctrine/common/lib/Doctrine/Common/Annotations/DocLexer.php';
include $system . '/vendor/doctrine/common/lib/Doctrine/Common/Annotations/Annotation/Target.php';
include $system . '/vendor/doctrine/common/lib/Doctrine/Common/Annotations/PhpParser.php';
include $system . '/vendor/Ray/Aop/src/Ray/Aop/Matchable.php';
include $system . '/vendor/Ray/Aop/src/Ray/Aop/Matcher.php';
include $system . '/src/BEAR/Sunday/Module/NamedModule.php';
include $system . '/src/BEAR/Sunday/Module/FrameworkModule.php';
include $system . '/src/BEAR/Sunday/Module/Log/MonologModule.php';
include $system . '/vendor/Ray/Di/src/Ray/Di/ProviderInterface.php';
include $system . '/src/BEAR/Sunday/Module/Log/MonologModule/MonologProvider.php';
include $system . '/vendor/Ray/Di/src/Ray/Di/InjectorInterface.php';
include $system . '/vendor/Ray/Di/src/Ray/Di/Injector.php';
include $system . '/vendor/aura/di/src/Aura/Di/ContainerInterface.php';
include $system . '/vendor/aura/di/src/Aura/Di/Container.php';
include $system . '/vendor/Ray/Di/src/Ray/Di/Container.php';
include $system . '/vendor/aura/di/src/Aura/Di/ForgeInterface.php';
include $system . '/vendor/aura/di/src/Aura/Di/Forge.php';
include $system . '/vendor/Ray/Di/src/Ray/Di/Forge.php';
include $system . '/vendor/aura/di/src/Aura/Di/ConfigInterface.php';
include $system . '/vendor/Ray/Di/src/Ray/Di/Config.php';
include $system . '/vendor/Ray/Di/src/Ray/Di/ApcConfig.php';
include $system . '/vendor/Ray/Di/src/Ray/Di/AnnotationInterface.php';
include $system . '/vendor/Ray/Di/src/Ray/Di/Annotation.php';
include $system . '/vendor/Ray/Di/src/Ray/Di/Definition.php';
include $system . '/vendor/Ray/Di/src/Ray/Di/EmptyModule.php';
include $system . '/vendor/Ray/Aop/src/Ray/Aop/Bind.php';
include $system . '/vendor/doctrine/common/lib/Doctrine/Common/Annotations/TokenParser.php';
include $system . '/vendor/Ray/Di/src/Ray/Di/Di/Annotation.php';
include $system . '/vendor/guzzle/guzzle/src/Guzzle/Common/Log/LogAdapterInterface.php';
include $system . '/vendor/guzzle/guzzle/src/Guzzle/Common/Log/AbstractLogAdapter.php';
include $system . '/vendor/guzzle/guzzle/src/Guzzle/Common/Log/MonologLogAdapter.php';
include $system . '/vendor/Ray/Di/src/Ray/Di/LoggerInterface.php';
include $system . '/src/BEAR/Sunday/Inject/LogInject.php';
include $system . '/src/BEAR/Sunday/Inject/Logger/Adapter.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/ResourceInterface.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/Resource.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/InvokerInterface.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/Invoker.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/LinkerInterface.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/Linker.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/LoggerInterface.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/Logger.php';
include $system . '/src/BEAR/Sunday/Module/Provider/ResourceLoggerProvider.php';
include $system . '/src/BEAR/Sunday/Module/Provider/ApcCacheProvider.php';
include $system . '/src/BEAR/Sunday/Module/Provider/SignalProvider.php';
include $system . '/src/BEAR/Sunday/Web/ResponseInterface.php';
include $system . '/src/BEAR/Sunday/Web/SymfonyResponse.php';
include $system . '/src/BEAR/Sunday/Exception/ExceptionHandlerInterface.php';
include $system . '/src/BEAR/Sunday/Inject/LogDirInject.php';
include $system . '/src/BEAR/Sunday/Exception/ExceptionHandler.php';
include $system . '/src/BEAR/Sunday/Output/ConsoleInterface.php';
include $system . '/src/BEAR/Sunday/Output/Console.php';
include $system . '/src/BEAR/Sunday/Resource/CacheControl/Taggable.php';
include $system . '/src/BEAR/Sunday/Resource/CacheControl/Etag.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/DevInvoker.php';
include $system . '/src/BEAR/Sunday/Module/TemplateEngine/DevRendererModule.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/Renderable.php';
include $system . '/src/BEAR/Sunday/Resource/View/DevRenderer.php';
include $system . '/vendor/Ray/Aop/src/Ray/Aop/Advice.php';
include $system . '/vendor/Ray/Aop/src/Ray/Aop/Interceptor.php';
include $system . '/vendor/Ray/Aop/src/Ray/Aop/MethodInterceptor.php';
include $system . '/src/BEAR/Sunday/Interceptor/Logger.php';
include $system . '/src/BEAR/Sunday/Annotation/Log.php';
include $system . '/vendor/Ray/Aop/src/Ray/Aop/Pointcut.php';
include $system . '/src/BEAR/Sunday/Resource/View/HalRenderer.php';
include $system . '/src/BEAR/Sunday/Module/SchemeModule.php';
include $system . '/src/BEAR/Sunday/Inject/AppNameInject.php';
include $system . '/src/BEAR/Sunday/Inject/InjectorInject.php';
include $system . '/src/BEAR/Sunday/Module/WebContext/AuraWebModule.php';
include $system . '/src/BEAR/Sunday/Module/Provider/WebContextProvider.php';
include $system . '/src/BEAR/Sunday/Module/TemplateEngine/SmartyModule/SmartyModule.php';
include $system . '/src/BEAR/Sunday/Inject/TmpDirInject.php';
include $system . '/src/BEAR/Sunday/Inject/AppDirInject.php';
include $system . '/src/BEAR/Sunday/Module/TemplateEngine/SmartyModule/SmartyProvider.php';
include $system . '/src/BEAR/Sunday/Resource/View/TemplateEngineAdapter.php';
include $system . '/src/BEAR/Sunday/Module/TemplateEngine/SmartyModule/SmartyAdapter.php';
include $system . '/src/BEAR/Sunday/Module/Database/DoctrineDbalModule.php';
include $system . '/src/BEAR/Sunday/Interceptor/DbInjector.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/Object.php';
include $system . '/src/BEAR/Sunday/Annotation/Db.php';
include $system . '/src/BEAR/Sunday/Module/Cqrs/CacheModule.php';
include $system . '/src/BEAR/Sunday/Inject/EtagInject.php';
include $system . '/src/BEAR/Sunday/Interceptor/CacheLoader.php';
include $system . '/vendor/guzzle/guzzle/src/Guzzle/Common/Cache/CacheAdapterInterface.php';
include $system . '/vendor/doctrine/common/lib/Doctrine/Common/Cache/Cache.php';
include $system . '/vendor/doctrine/common/lib/Doctrine/Common/Cache/CacheProvider.php';
include $system . '/vendor/doctrine/common/lib/Doctrine/Common/Cache/ApcCache.php';
include $system . '/vendor/guzzle/guzzle/src/Guzzle/Common/Cache/AbstractCacheAdapter.php';
include $system . '/vendor/guzzle/guzzle/src/Guzzle/Common/Cache/DoctrineCacheAdapter.php';
include $system . '/src/BEAR/Sunday/Annotation/Cache.php';
include $system . '/src/BEAR/Sunday/Interceptor/CacheUpdater.php';
include $system . '/src/BEAR/Sunday/Annotation/CacheUpdate.php';
include $system . '/src/BEAR/Sunday/Annotation/Time.php';
include $system . '/src/BEAR/Sunday/Interceptor/TimeStamper.php';
include $system . '/src/BEAR/Sunday/Annotation/Transactional.php';
include $system . '/src/BEAR/Sunday/Interceptor/Transactional.php';
include $system . '/src/BEAR/Sunday/Application/LoggerInterface.php';
include $system . '/src/BEAR/Sunday/Application/Logger.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/BodyArrayAccess.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/AbstractObject.php';
include $system . '/src/BEAR/Sunday/Resource/AbstractPage.php';
include $system . '/src/BEAR/Sunday/Inject/ResourceInject.php';
include $system . '/vendor/symfony/console/Symfony/Component/Console/Output/OutputInterface.php';
include $system . '/vendor/symfony/console/Symfony/Component/Console/Output/Output.php';
include $system . '/vendor/symfony/console/Symfony/Component/Console/Output/StreamOutput.php';
include $system . '/vendor/symfony/console/Symfony/Component/Console/Output/ConsoleOutput.php';
include $system . '/vendor/guzzle/guzzle/src/Guzzle/Parser/UriTemplate/UriTemplateInterface.php';
include $system . '/vendor/guzzle/guzzle/src/Guzzle/Parser/UriTemplate/UriTemplate.php';
include $system . '/vendor/symfony/console/Symfony/Component/Console/Formatter/OutputFormatterInterface.php';
include $system . '/vendor/symfony/console/Symfony/Component/Console/Formatter/OutputFormatter.php';
include $system . '/vendor/symfony/console/Symfony/Component/Console/Formatter/OutputFormatterStyleInterface.php';
include $system . '/vendor/symfony/console/Symfony/Component/Console/Formatter/OutputFormatterStyle.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/FactoryInterface.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/Factory.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/Requestable.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/Request.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/SchemeCollection.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/Provider.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/Adapter/Adapter.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/Adapter/App.php';
include $system . '/vendor/aura/signal/src/Aura/Signal/Manager.php';
include $system . '/vendor/aura/signal/src/Aura/Signal/HandlerFactory.php';
include $system . '/vendor/aura/signal/src/Aura/Signal/ResultFactory.php';
include $system . '/vendor/aura/signal/src/Aura/Signal/ResultCollection.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/SignalHandler/Handle.php';
include $system . '/vendor/bear/resource/src/BEAR/Resource/SignalHandler/Provides.php';
include $system . '/vendor/aura/signal/src/Aura/Signal/Handler.php';
include $system . '/src/BEAR/Sunday/Router/Router.php';
include $system . '/src/BEAR/Sunday/Resource/Link.php';
include $system . '/vendor/Ray/Aop/src/Ray/Aop/Weave.php';
include $system . '/vendor/Ray/Aop/src/Ray/Aop/Weaver.php';
include $system . '/vendor/Ray/Aop/src/Ray/Aop/Joinpoint.php';
include $system . '/vendor/Ray/Aop/src/Ray/Aop/Invocation.php';
include $system . '/vendor/Ray/Aop/src/Ray/Aop/MethodInvocation.php';
include $system . '/vendor/Ray/Aop/src/Ray/Aop/ReflectiveMethodInvocation.php';
include $system . '/vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/Response.php';
include $system . '/vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/HeaderBag.php';
include $system . '/vendor/symfony/http-foundation/Symfony/Component/HttpFoundation/ResponseHeaderBag.php';
include $system . '/src/BEAR/Sunday/Application/Fireable.php';
include $system . '/src/BEAR/Sunday/Application/ResourceLogIterator.php';

include $system . '/vendor/Ray/Di/src/Ray/Di/Di/Inject.php';
include $system . '/vendor/Ray/Di/src/Ray/Di/Di/Named.php';
include $system . '/vendor/Ray/Aop/src/Ray/Aop/Matched.php';
include $system . '/src/BEAR/Sunday/Interceptor/DbSetterInterface.php';
error_reporting($er);
unset($er);