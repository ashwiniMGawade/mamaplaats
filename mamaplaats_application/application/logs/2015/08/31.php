<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-08-31 09:27:12 --- EMERGENCY: Aws\S3\Exception\InvalidRequestException [ 0 ]: The authorization mechanism you have provided is not supported. Please use AWS4-HMAC-SHA256. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php [ 91 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php:76
2015-08-31 09:27:12 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php(76): Aws\Common\Exception\NamespaceExceptionFactory->createException('Aws\S3\Exceptio...', Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Message\Response), Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/ExceptionListener.php(55): Aws\Common\Exception\NamespaceExceptionFactory->fromResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Message\Response))
#2 [internal function]: Aws\Common\Exception\ExceptionListener->onRequestError(Object(Guzzle\Common\Event), 'request.error', Object(Symfony\Component\EventDispatcher\EventDispatcher))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Symfony/Component/EventDispatcher/EventDispatcher.php(164): call_user_func(Array, Object(Guzzle\Common\Event), 'request.error', Object(Symfony\Component\EventDispatcher\EventDispatcher))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Symfony/Component/EventDispatcher/EventDispatcher.php(53): Symfony\Component\EventDispatcher\EventDispatcher->doDispatch(Array, 'request.error', Object(Guzzle\Common\Event))
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Message/Request.php(589): Symfony\Component\EventDispatcher\EventDispatcher->dispatch('request.error', Object(Guzzle\Common\Event))
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Message/Request.php(378): Guzzle\Http\Message\Request->processResponse(Array)
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(286): Guzzle\Http\Message\Request->setState('complete', Array)
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(244): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(227): Guzzle\Http\Curl\CurlMulti->processMessages()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(211): Guzzle\Http\Curl\CurlMulti->executeHandles()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(105): Guzzle\Http\Curl\CurlMulti->perform()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMultiProxy.php(91): Guzzle\Http\Curl\CurlMulti->send()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(282): Guzzle\Http\Curl\CurlMultiProxy->send()
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(284): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#15 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Client.php(136): Aws\Common\Client\AbstractClient->send(Object(Guzzle\Http\Message\Request))
#16 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Command/AbstractCommand.php(154): Guzzle\Service\Client->execute(Object(Aws\S3\Command\S3Command))
#17 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Command/AbstractCommand.php(190): Guzzle\Service\Command\AbstractCommand->execute()
#18 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Iterator/AwsResourceIterator.php(61): Guzzle\Service\Command\AbstractCommand->getResult()
#19 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Resource/ResourceIterator.php(190): Aws\Common\Iterator\AwsResourceIterator->sendRequest()
#20 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Resource/ResourceIterator.php(157): Guzzle\Service\Resource\ResourceIterator->next()
#21 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(23): Guzzle\Service\Resource\ResourceIterator->rewind()
#22 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#23 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#24 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#25 [internal function]: Kohana_Controller->execute()
#26 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#27 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#28 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#29 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#30 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php:76
2015-08-31 09:29:07 --- EMERGENCY: Aws\S3\Exception\InvalidRequestException [ 0 ]: The authorization mechanism you have provided is not supported. Please use AWS4-HMAC-SHA256. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php [ 91 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php:76
2015-08-31 09:29:07 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php(76): Aws\Common\Exception\NamespaceExceptionFactory->createException('Aws\S3\Exceptio...', Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Message\Response), Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/ExceptionListener.php(55): Aws\Common\Exception\NamespaceExceptionFactory->fromResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Message\Response))
#2 [internal function]: Aws\Common\Exception\ExceptionListener->onRequestError(Object(Guzzle\Common\Event), 'request.error', Object(Symfony\Component\EventDispatcher\EventDispatcher))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Symfony/Component/EventDispatcher/EventDispatcher.php(164): call_user_func(Array, Object(Guzzle\Common\Event), 'request.error', Object(Symfony\Component\EventDispatcher\EventDispatcher))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Symfony/Component/EventDispatcher/EventDispatcher.php(53): Symfony\Component\EventDispatcher\EventDispatcher->doDispatch(Array, 'request.error', Object(Guzzle\Common\Event))
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Message/Request.php(589): Symfony\Component\EventDispatcher\EventDispatcher->dispatch('request.error', Object(Guzzle\Common\Event))
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Message/Request.php(378): Guzzle\Http\Message\Request->processResponse(Array)
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(286): Guzzle\Http\Message\Request->setState('complete', Array)
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(244): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(227): Guzzle\Http\Curl\CurlMulti->processMessages()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(211): Guzzle\Http\Curl\CurlMulti->executeHandles()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(105): Guzzle\Http\Curl\CurlMulti->perform()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMultiProxy.php(91): Guzzle\Http\Curl\CurlMulti->send()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(282): Guzzle\Http\Curl\CurlMultiProxy->send()
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(284): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#15 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Client.php(136): Aws\Common\Client\AbstractClient->send(Object(Guzzle\Http\Message\Request))
#16 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Command/AbstractCommand.php(154): Guzzle\Service\Client->execute(Object(Aws\S3\Command\S3Command))
#17 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Command/AbstractCommand.php(190): Guzzle\Service\Command\AbstractCommand->execute()
#18 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Iterator/AwsResourceIterator.php(61): Guzzle\Service\Command\AbstractCommand->getResult()
#19 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Resource/ResourceIterator.php(190): Aws\Common\Iterator\AwsResourceIterator->sendRequest()
#20 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Resource/ResourceIterator.php(157): Guzzle\Service\Resource\ResourceIterator->next()
#21 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(21): Guzzle\Service\Resource\ResourceIterator->rewind()
#22 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(32): FileSystem_Factory::s3()
#23 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#24 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#25 [internal function]: Kohana_Controller->execute()
#26 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#27 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#28 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#29 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#30 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php:76
2015-08-31 10:44:39 --- EMERGENCY: InvalidArgumentException [ 0 ]: Missing required client configuration options: 

region: (string)

  A "region" configuration value is required for the "s3" service
  (e.g., "us-west-2"). A list of available public regions and endpoints can be
  found at http://docs.aws.amazon.com/general/latest/gr/rande.html.

version: (string)

  A "version" configuration value is required. Specifying a version constraint
  ensures that your code will not be affected by a breaking change made to the
  service. For example, when using Amazon S3, you can lock your API version to
  "2006-03-01".
  
  Your build of the SDK has the following version(s) of "s3": * "2006-03-01"
  
  You may provide "latest" to the "version" configuration value to utilize the
  most recent available API version that your client's API provider can find.
  Note: Using 'latest' in a production application is not recommended.
  
  A list of available API versions can be found on each client's API documentation
  page: http://docs.aws.amazon.com/aws-sdk-php/v3/api/index.html. If you are
  unable to load a specific API version, then you may need to update your copy of
  the SDK. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php [ 328 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:224
2015-08-31 10:44:39 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(224): Aws\ClientResolver->throwRequired(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(137): Aws\ClientResolver->resolve(Array, Object(Aws\HandlerList))
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(62): Aws\AwsClient->__construct(Array)
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(349): Aws\S3\S3Client->__construct(Array)
#4 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\AwsClient::factory(Array)
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(32): FileSystem_Factory::s3()
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#7 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#13 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:224
2015-08-31 10:48:31 --- EMERGENCY: InvalidArgumentException [ 0 ]: Missing required client configuration options: 

region: (string)

  A "region" configuration value is required for the "s3" service
  (e.g., "us-west-2"). A list of available public regions and endpoints can be
  found at http://docs.aws.amazon.com/general/latest/gr/rande.html.

version: (string)

  A "version" configuration value is required. Specifying a version constraint
  ensures that your code will not be affected by a breaking change made to the
  service. For example, when using Amazon S3, you can lock your API version to
  "2006-03-01".
  
  Your build of the SDK has the following version(s) of "s3": * "2006-03-01"
  
  You may provide "latest" to the "version" configuration value to utilize the
  most recent available API version that your client's API provider can find.
  Note: Using 'latest' in a production application is not recommended.
  
  A list of available API versions can be found on each client's API documentation
  page: http://docs.aws.amazon.com/aws-sdk-php/v3/api/index.html. If you are
  unable to load a specific API version, then you may need to update your copy of
  the SDK. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php [ 328 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:224
2015-08-31 10:48:31 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(224): Aws\ClientResolver->throwRequired(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(137): Aws\ClientResolver->resolve(Array, Object(Aws\HandlerList))
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(62): Aws\AwsClient->__construct(Array)
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(349): Aws\S3\S3Client->__construct(Array)
#4 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\AwsClient::factory(Array)
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#7 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#13 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:224
2015-08-31 10:48:34 --- EMERGENCY: InvalidArgumentException [ 0 ]: Missing required client configuration options: 

region: (string)

  A "region" configuration value is required for the "s3" service
  (e.g., "us-west-2"). A list of available public regions and endpoints can be
  found at http://docs.aws.amazon.com/general/latest/gr/rande.html.

version: (string)

  A "version" configuration value is required. Specifying a version constraint
  ensures that your code will not be affected by a breaking change made to the
  service. For example, when using Amazon S3, you can lock your API version to
  "2006-03-01".
  
  Your build of the SDK has the following version(s) of "s3": * "2006-03-01"
  
  You may provide "latest" to the "version" configuration value to utilize the
  most recent available API version that your client's API provider can find.
  Note: Using 'latest' in a production application is not recommended.
  
  A list of available API versions can be found on each client's API documentation
  page: http://docs.aws.amazon.com/aws-sdk-php/v3/api/index.html. If you are
  unable to load a specific API version, then you may need to update your copy of
  the SDK. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php [ 328 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:224
2015-08-31 10:48:34 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(224): Aws\ClientResolver->throwRequired(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(137): Aws\ClientResolver->resolve(Array, Object(Aws\HandlerList))
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(62): Aws\AwsClient->__construct(Array)
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(349): Aws\S3\S3Client->__construct(Array)
#4 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\AwsClient::factory(Array)
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#7 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#13 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:224
2015-08-31 10:52:37 --- EMERGENCY: Aws\S3\Exception\InvalidRequestException [ 0 ]: The authorization mechanism you have provided is not supported. Please use AWS4-HMAC-SHA256. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php [ 91 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php:76
2015-08-31 10:52:37 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php(76): Aws\Common\Exception\NamespaceExceptionFactory->createException('Aws\S3\Exceptio...', Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Message\Response), Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/ExceptionListener.php(55): Aws\Common\Exception\NamespaceExceptionFactory->fromResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Message\Response))
#2 [internal function]: Aws\Common\Exception\ExceptionListener->onRequestError(Object(Guzzle\Common\Event), 'request.error', Object(Symfony\Component\EventDispatcher\EventDispatcher))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Symfony/Component/EventDispatcher/EventDispatcher.php(164): call_user_func(Array, Object(Guzzle\Common\Event), 'request.error', Object(Symfony\Component\EventDispatcher\EventDispatcher))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Symfony/Component/EventDispatcher/EventDispatcher.php(53): Symfony\Component\EventDispatcher\EventDispatcher->doDispatch(Array, 'request.error', Object(Guzzle\Common\Event))
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Message/Request.php(589): Symfony\Component\EventDispatcher\EventDispatcher->dispatch('request.error', Object(Guzzle\Common\Event))
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Message/Request.php(378): Guzzle\Http\Message\Request->processResponse(Array)
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(303): Guzzle\Http\Message\Request->setState('complete', Array)
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(257): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(240): Guzzle\Http\Curl\CurlMulti->processMessages()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(224): Guzzle\Http\Curl\CurlMulti->executeHandles()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(111): Guzzle\Http\Curl\CurlMulti->perform()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMultiProxy.php(94): Guzzle\Http\Curl\CurlMulti->send()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(284): Guzzle\Http\Curl\CurlMultiProxy->send()
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(256): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#15 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Client.php(136): Aws\Common\Client\AbstractClient->send(Object(Guzzle\Http\Message\Request))
#16 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Command/AbstractCommand.php(153): Guzzle\Service\Client->execute(Object(Aws\S3\Command\S3Command))
#17 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Command/AbstractCommand.php(189): Guzzle\Service\Command\AbstractCommand->execute()
#18 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Iterator/AwsResourceIterator.php(62): Guzzle\Service\Command\AbstractCommand->getResult()
#19 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Resource/ResourceIterator.php(190): Aws\Common\Iterator\AwsResourceIterator->sendRequest()
#20 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Resource/ResourceIterator.php(157): Guzzle\Service\Resource\ResourceIterator->next()
#21 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(21): Guzzle\Service\Resource\ResourceIterator->rewind()
#22 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(32): FileSystem_Factory::s3()
#23 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#24 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#25 [internal function]: Kohana_Controller->execute()
#26 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#27 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#28 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#29 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#30 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php:76
2015-08-31 10:57:10 --- EMERGENCY: Aws\S3\Exception\InvalidRequestException [ 0 ]: The authorization mechanism you have provided is not supported. Please use AWS4-HMAC-SHA256. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php [ 91 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php:76
2015-08-31 10:57:10 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php(76): Aws\Common\Exception\NamespaceExceptionFactory->createException('Aws\S3\Exceptio...', Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Message\Response), Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/ExceptionListener.php(55): Aws\Common\Exception\NamespaceExceptionFactory->fromResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Message\Response))
#2 [internal function]: Aws\Common\Exception\ExceptionListener->onRequestError(Object(Guzzle\Common\Event), 'request.error', Object(Symfony\Component\EventDispatcher\EventDispatcher))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Symfony/Component/EventDispatcher/EventDispatcher.php(164): call_user_func(Array, Object(Guzzle\Common\Event), 'request.error', Object(Symfony\Component\EventDispatcher\EventDispatcher))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Symfony/Component/EventDispatcher/EventDispatcher.php(53): Symfony\Component\EventDispatcher\EventDispatcher->doDispatch(Array, 'request.error', Object(Guzzle\Common\Event))
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Message/Request.php(589): Symfony\Component\EventDispatcher\EventDispatcher->dispatch('request.error', Object(Guzzle\Common\Event))
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Message/Request.php(378): Guzzle\Http\Message\Request->processResponse(Array)
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(303): Guzzle\Http\Message\Request->setState('complete', Array)
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(257): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(240): Guzzle\Http\Curl\CurlMulti->processMessages()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(224): Guzzle\Http\Curl\CurlMulti->executeHandles()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(111): Guzzle\Http\Curl\CurlMulti->perform()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMultiProxy.php(94): Guzzle\Http\Curl\CurlMulti->send()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(284): Guzzle\Http\Curl\CurlMultiProxy->send()
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(256): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#15 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Client.php(136): Aws\Common\Client\AbstractClient->send(Object(Guzzle\Http\Message\Request))
#16 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Command/AbstractCommand.php(153): Guzzle\Service\Client->execute(Object(Aws\S3\Command\S3Command))
#17 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Command/AbstractCommand.php(189): Guzzle\Service\Command\AbstractCommand->execute()
#18 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Iterator/AwsResourceIterator.php(62): Guzzle\Service\Command\AbstractCommand->getResult()
#19 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Resource/ResourceIterator.php(190): Aws\Common\Iterator\AwsResourceIterator->sendRequest()
#20 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Resource/ResourceIterator.php(157): Guzzle\Service\Resource\ResourceIterator->next()
#21 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(21): Guzzle\Service\Resource\ResourceIterator->rewind()
#22 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(32): FileSystem_Factory::s3()
#23 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#24 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#25 [internal function]: Kohana_Controller->execute()
#26 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#27 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#28 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#29 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#30 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php:76
2015-08-31 10:57:44 --- EMERGENCY: Aws\S3\Exception\InvalidRequestException [ 0 ]: The authorization mechanism you have provided is not supported. Please use AWS4-HMAC-SHA256. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php [ 91 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php:76
2015-08-31 10:57:44 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php(76): Aws\Common\Exception\NamespaceExceptionFactory->createException('Aws\S3\Exceptio...', Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Message\Response), Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/ExceptionListener.php(55): Aws\Common\Exception\NamespaceExceptionFactory->fromResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Message\Response))
#2 [internal function]: Aws\Common\Exception\ExceptionListener->onRequestError(Object(Guzzle\Common\Event), 'request.error', Object(Symfony\Component\EventDispatcher\EventDispatcher))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Symfony/Component/EventDispatcher/EventDispatcher.php(164): call_user_func(Array, Object(Guzzle\Common\Event), 'request.error', Object(Symfony\Component\EventDispatcher\EventDispatcher))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Symfony/Component/EventDispatcher/EventDispatcher.php(53): Symfony\Component\EventDispatcher\EventDispatcher->doDispatch(Array, 'request.error', Object(Guzzle\Common\Event))
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Message/Request.php(589): Symfony\Component\EventDispatcher\EventDispatcher->dispatch('request.error', Object(Guzzle\Common\Event))
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Message/Request.php(378): Guzzle\Http\Message\Request->processResponse(Array)
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(303): Guzzle\Http\Message\Request->setState('complete', Array)
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(257): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(240): Guzzle\Http\Curl\CurlMulti->processMessages()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(224): Guzzle\Http\Curl\CurlMulti->executeHandles()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(111): Guzzle\Http\Curl\CurlMulti->perform()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMultiProxy.php(94): Guzzle\Http\Curl\CurlMulti->send()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(284): Guzzle\Http\Curl\CurlMultiProxy->send()
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(256): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#15 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Client.php(136): Aws\Common\Client\AbstractClient->send(Object(Guzzle\Http\Message\Request))
#16 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Command/AbstractCommand.php(153): Guzzle\Service\Client->execute(Object(Aws\S3\Command\S3Command))
#17 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Command/AbstractCommand.php(189): Guzzle\Service\Command\AbstractCommand->execute()
#18 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Iterator/AwsResourceIterator.php(62): Guzzle\Service\Command\AbstractCommand->getResult()
#19 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Resource/ResourceIterator.php(190): Aws\Common\Iterator\AwsResourceIterator->sendRequest()
#20 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Resource/ResourceIterator.php(157): Guzzle\Service\Resource\ResourceIterator->next()
#21 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(21): Guzzle\Service\Resource\ResourceIterator->rewind()
#22 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(32): FileSystem_Factory::s3()
#23 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#24 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#25 [internal function]: Kohana_Controller->execute()
#26 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#27 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#28 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#29 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#30 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php:76
2015-08-31 10:57:51 --- EMERGENCY: Aws\S3\Exception\InvalidRequestException [ 0 ]: The authorization mechanism you have provided is not supported. Please use AWS4-HMAC-SHA256. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php [ 91 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php:76
2015-08-31 10:57:51 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php(76): Aws\Common\Exception\NamespaceExceptionFactory->createException('Aws\S3\Exceptio...', Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Message\Response), Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/ExceptionListener.php(55): Aws\Common\Exception\NamespaceExceptionFactory->fromResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Message\Response))
#2 [internal function]: Aws\Common\Exception\ExceptionListener->onRequestError(Object(Guzzle\Common\Event), 'request.error', Object(Symfony\Component\EventDispatcher\EventDispatcher))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Symfony/Component/EventDispatcher/EventDispatcher.php(164): call_user_func(Array, Object(Guzzle\Common\Event), 'request.error', Object(Symfony\Component\EventDispatcher\EventDispatcher))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Symfony/Component/EventDispatcher/EventDispatcher.php(53): Symfony\Component\EventDispatcher\EventDispatcher->doDispatch(Array, 'request.error', Object(Guzzle\Common\Event))
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Message/Request.php(589): Symfony\Component\EventDispatcher\EventDispatcher->dispatch('request.error', Object(Guzzle\Common\Event))
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Message/Request.php(378): Guzzle\Http\Message\Request->processResponse(Array)
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(303): Guzzle\Http\Message\Request->setState('complete', Array)
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(257): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(240): Guzzle\Http\Curl\CurlMulti->processMessages()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(224): Guzzle\Http\Curl\CurlMulti->executeHandles()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(111): Guzzle\Http\Curl\CurlMulti->perform()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMultiProxy.php(94): Guzzle\Http\Curl\CurlMulti->send()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(284): Guzzle\Http\Curl\CurlMultiProxy->send()
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(256): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#15 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Client.php(136): Aws\Common\Client\AbstractClient->send(Object(Guzzle\Http\Message\Request))
#16 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Command/AbstractCommand.php(153): Guzzle\Service\Client->execute(Object(Aws\S3\Command\S3Command))
#17 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Command/AbstractCommand.php(189): Guzzle\Service\Command\AbstractCommand->execute()
#18 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Iterator/AwsResourceIterator.php(62): Guzzle\Service\Command\AbstractCommand->getResult()
#19 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Resource/ResourceIterator.php(190): Aws\Common\Iterator\AwsResourceIterator->sendRequest()
#20 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Resource/ResourceIterator.php(157): Guzzle\Service\Resource\ResourceIterator->next()
#21 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(21): Guzzle\Service\Resource\ResourceIterator->rewind()
#22 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(32): FileSystem_Factory::s3()
#23 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#24 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#25 [internal function]: Kohana_Controller->execute()
#26 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#27 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#28 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#29 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#30 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php:76
2015-08-31 10:57:54 --- EMERGENCY: Aws\S3\Exception\InvalidRequestException [ 0 ]: The authorization mechanism you have provided is not supported. Please use AWS4-HMAC-SHA256. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php [ 91 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php:76
2015-08-31 10:57:54 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php(76): Aws\Common\Exception\NamespaceExceptionFactory->createException('Aws\S3\Exceptio...', Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Message\Response), Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/ExceptionListener.php(55): Aws\Common\Exception\NamespaceExceptionFactory->fromResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Message\Response))
#2 [internal function]: Aws\Common\Exception\ExceptionListener->onRequestError(Object(Guzzle\Common\Event), 'request.error', Object(Symfony\Component\EventDispatcher\EventDispatcher))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Symfony/Component/EventDispatcher/EventDispatcher.php(164): call_user_func(Array, Object(Guzzle\Common\Event), 'request.error', Object(Symfony\Component\EventDispatcher\EventDispatcher))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Symfony/Component/EventDispatcher/EventDispatcher.php(53): Symfony\Component\EventDispatcher\EventDispatcher->doDispatch(Array, 'request.error', Object(Guzzle\Common\Event))
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Message/Request.php(589): Symfony\Component\EventDispatcher\EventDispatcher->dispatch('request.error', Object(Guzzle\Common\Event))
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Message/Request.php(378): Guzzle\Http\Message\Request->processResponse(Array)
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(303): Guzzle\Http\Message\Request->setState('complete', Array)
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(257): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(240): Guzzle\Http\Curl\CurlMulti->processMessages()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(224): Guzzle\Http\Curl\CurlMulti->executeHandles()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(111): Guzzle\Http\Curl\CurlMulti->perform()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMultiProxy.php(94): Guzzle\Http\Curl\CurlMulti->send()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(284): Guzzle\Http\Curl\CurlMultiProxy->send()
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(256): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#15 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Client.php(136): Aws\Common\Client\AbstractClient->send(Object(Guzzle\Http\Message\Request))
#16 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Command/AbstractCommand.php(153): Guzzle\Service\Client->execute(Object(Aws\S3\Command\S3Command))
#17 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Command/AbstractCommand.php(189): Guzzle\Service\Command\AbstractCommand->execute()
#18 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Iterator/AwsResourceIterator.php(62): Guzzle\Service\Command\AbstractCommand->getResult()
#19 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Resource/ResourceIterator.php(190): Aws\Common\Iterator\AwsResourceIterator->sendRequest()
#20 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Resource/ResourceIterator.php(157): Guzzle\Service\Resource\ResourceIterator->next()
#21 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(21): Guzzle\Service\Resource\ResourceIterator->rewind()
#22 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(32): FileSystem_Factory::s3()
#23 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#24 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#25 [internal function]: Kohana_Controller->execute()
#26 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#27 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#28 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#29 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#30 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php:76
2015-08-31 10:58:01 --- EMERGENCY: Aws\S3\Exception\InvalidRequestException [ 0 ]: The authorization mechanism you have provided is not supported. Please use AWS4-HMAC-SHA256. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php [ 91 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php:76
2015-08-31 10:58:01 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php(76): Aws\Common\Exception\NamespaceExceptionFactory->createException('Aws\S3\Exceptio...', Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Message\Response), Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/ExceptionListener.php(55): Aws\Common\Exception\NamespaceExceptionFactory->fromResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Message\Response))
#2 [internal function]: Aws\Common\Exception\ExceptionListener->onRequestError(Object(Guzzle\Common\Event), 'request.error', Object(Symfony\Component\EventDispatcher\EventDispatcher))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Symfony/Component/EventDispatcher/EventDispatcher.php(164): call_user_func(Array, Object(Guzzle\Common\Event), 'request.error', Object(Symfony\Component\EventDispatcher\EventDispatcher))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Symfony/Component/EventDispatcher/EventDispatcher.php(53): Symfony\Component\EventDispatcher\EventDispatcher->doDispatch(Array, 'request.error', Object(Guzzle\Common\Event))
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Message/Request.php(589): Symfony\Component\EventDispatcher\EventDispatcher->dispatch('request.error', Object(Guzzle\Common\Event))
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Message/Request.php(378): Guzzle\Http\Message\Request->processResponse(Array)
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(303): Guzzle\Http\Message\Request->setState('complete', Array)
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(257): Guzzle\Http\Curl\CurlMulti->processResponse(Object(Guzzle\Http\Message\Request), Object(Guzzle\Http\Curl\CurlHandle), Array)
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(240): Guzzle\Http\Curl\CurlMulti->processMessages()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(224): Guzzle\Http\Curl\CurlMulti->executeHandles()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMulti.php(111): Guzzle\Http\Curl\CurlMulti->perform()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Curl/CurlMultiProxy.php(94): Guzzle\Http\Curl\CurlMulti->send()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(284): Guzzle\Http\Curl\CurlMultiProxy->send()
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(256): Guzzle\Http\Client->send(Object(Guzzle\Http\Message\Request))
#15 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Client.php(136): Aws\Common\Client\AbstractClient->send(Object(Guzzle\Http\Message\Request))
#16 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Command/AbstractCommand.php(153): Guzzle\Service\Client->execute(Object(Aws\S3\Command\S3Command))
#17 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Command/AbstractCommand.php(189): Guzzle\Service\Command\AbstractCommand->execute()
#18 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Iterator/AwsResourceIterator.php(62): Guzzle\Service\Command\AbstractCommand->getResult()
#19 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Resource/ResourceIterator.php(190): Aws\Common\Iterator\AwsResourceIterator->sendRequest()
#20 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Service/Resource/ResourceIterator.php(157): Guzzle\Service\Resource\ResourceIterator->next()
#21 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(21): Guzzle\Service\Resource\ResourceIterator->rewind()
#22 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(32): FileSystem_Factory::s3()
#23 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#24 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#25 [internal function]: Kohana_Controller->execute()
#26 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#27 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#28 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#29 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#30 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Exception/NamespaceExceptionFactory.php:76
2015-08-31 10:58:38 --- EMERGENCY: InvalidArgumentException [ 0 ]: Missing required client configuration options: 

region: (string)

  A "region" configuration value is required for the "s3" service
  (e.g., "us-west-2"). A list of available public regions and endpoints can be
  found at http://docs.aws.amazon.com/general/latest/gr/rande.html.

version: (string)

  A "version" configuration value is required. Specifying a version constraint
  ensures that your code will not be affected by a breaking change made to the
  service. For example, when using Amazon S3, you can lock your API version to
  "2006-03-01".
  
  Your build of the SDK has the following version(s) of "s3": * "2006-03-01"
  
  You may provide "latest" to the "version" configuration value to utilize the
  most recent available API version that your client's API provider can find.
  Note: Using 'latest' in a production application is not recommended.
  
  A list of available API versions can be found on each client's API documentation
  page: http://docs.aws.amazon.com/aws-sdk-php/v3/api/index.html. If you are
  unable to load a specific API version, then you may need to update your copy of
  the SDK. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php [ 328 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:224
2015-08-31 10:58:38 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(224): Aws\ClientResolver->throwRequired(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(137): Aws\ClientResolver->resolve(Array, Object(Aws\HandlerList))
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(62): Aws\AwsClient->__construct(Array)
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(349): Aws\S3\S3Client->__construct(Array)
#4 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\AwsClient::factory(Array)
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(32): FileSystem_Factory::s3()
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#7 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#13 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:224
2015-08-31 11:09:09 --- EMERGENCY: Aws\Exception\UnresolvedApiException [ 0 ]: The s3 service does not have version: latest|version. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Api/ApiProvider.php [ 82 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:378
2015-08-31 11:09:09 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(378): Aws\Api\ApiProvider::resolve(Object(Aws\Api\ApiProvider), 'api', 's3', 'latest|version')
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(496): Aws\ClientResolver::_apply_api_provider(Object(Aws\Api\ApiProvider), Array, Object(Aws\HandlerList))
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(245): Aws\S3\S3Client::_applyApiProvider(Object(Aws\Api\ApiProvider), Array, Object(Aws\HandlerList))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(137): Aws\ClientResolver->resolve(Array, Object(Aws\HandlerList))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(62): Aws\AwsClient->__construct(Array)
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(349): Aws\S3\S3Client->__construct(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(22): Aws\AwsClient::factory(Array)
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(37): FileSystem_Factory::s3()
#8 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#9 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#15 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:378
2015-08-31 11:09:18 --- EMERGENCY: InvalidArgumentException [ 0 ]: Missing required client configuration options: 

version: (string)

  A "version" configuration value is required. Specifying a version constraint
  ensures that your code will not be affected by a breaking change made to the
  service. For example, when using Amazon S3, you can lock your API version to
  "2006-03-01".
  
  Your build of the SDK has the following version(s) of "s3": * "2006-03-01"
  
  You may provide "latest" to the "version" configuration value to utilize the
  most recent available API version that your client's API provider can find.
  Note: Using 'latest' in a production application is not recommended.
  
  A list of available API versions can be found on each client's API documentation
  page: http://docs.aws.amazon.com/aws-sdk-php/v3/api/index.html. If you are
  unable to load a specific API version, then you may need to update your copy of
  the SDK. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php [ 328 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:224
2015-08-31 11:09:18 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(224): Aws\ClientResolver->throwRequired(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(137): Aws\ClientResolver->resolve(Array, Object(Aws\HandlerList))
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(62): Aws\AwsClient->__construct(Array)
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(349): Aws\S3\S3Client->__construct(Array)
#4 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(22): Aws\AwsClient::factory(Array)
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(37): FileSystem_Factory::s3()
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#7 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#13 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:224
2015-08-31 11:10:07 --- EMERGENCY: InvalidArgumentException [ 0 ]: Missing required client configuration options: 

version: (string)

  A "version" configuration value is required. Specifying a version constraint
  ensures that your code will not be affected by a breaking change made to the
  service. For example, when using Amazon S3, you can lock your API version to
  "2006-03-01".
  
  Your build of the SDK has the following version(s) of "s3": * "2006-03-01"
  
  You may provide "latest" to the "version" configuration value to utilize the
  most recent available API version that your client's API provider can find.
  Note: Using 'latest' in a production application is not recommended.
  
  A list of available API versions can be found on each client's API documentation
  page: http://docs.aws.amazon.com/aws-sdk-php/v3/api/index.html. If you are
  unable to load a specific API version, then you may need to update your copy of
  the SDK. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php [ 328 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:224
2015-08-31 11:10:07 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(224): Aws\ClientResolver->throwRequired(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(137): Aws\ClientResolver->resolve(Array, Object(Aws\HandlerList))
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(62): Aws\AwsClient->__construct(Array)
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(349): Aws\S3\S3Client->__construct(Array)
#4 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(22): Aws\AwsClient::factory(Array)
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(37): FileSystem_Factory::s3()
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#7 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#13 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:224
2015-08-31 11:11:14 --- EMERGENCY: Aws\Exception\UnresolvedApiException [ 0 ]: The s3 service does not have version: 3. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Api/ApiProvider.php [ 82 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:378
2015-08-31 11:11:14 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(378): Aws\Api\ApiProvider::resolve(Object(Aws\Api\ApiProvider), 'api', 's3', '3')
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(496): Aws\ClientResolver::_apply_api_provider(Object(Aws\Api\ApiProvider), Array, Object(Aws\HandlerList))
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(245): Aws\S3\S3Client::_applyApiProvider(Object(Aws\Api\ApiProvider), Array, Object(Aws\HandlerList))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(137): Aws\ClientResolver->resolve(Array, Object(Aws\HandlerList))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(62): Aws\AwsClient->__construct(Array)
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(349): Aws\S3\S3Client->__construct(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(22): Aws\AwsClient::factory(Array)
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(37): FileSystem_Factory::s3()
#8 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#9 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#15 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:378
2015-08-31 11:14:34 --- EMERGENCY: Aws\Exception\UnresolvedApiException [ 0 ]: The s3 service does not have version: 1.0.4. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Api/ApiProvider.php [ 82 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:378
2015-08-31 11:14:34 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(378): Aws\Api\ApiProvider::resolve(Object(Aws\Api\ApiProvider), 'api', 's3', '1.0.4')
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(496): Aws\ClientResolver::_apply_api_provider(Object(Aws\Api\ApiProvider), Array, Object(Aws\HandlerList))
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(245): Aws\S3\S3Client::_applyApiProvider(Object(Aws\Api\ApiProvider), Array, Object(Aws\HandlerList))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(137): Aws\ClientResolver->resolve(Array, Object(Aws\HandlerList))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(62): Aws\AwsClient->__construct(Array)
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(349): Aws\S3\S3Client->__construct(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(22): Aws\AwsClient::factory(Array)
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(37): FileSystem_Factory::s3()
#8 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#9 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#15 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:378
2015-08-31 11:14:36 --- EMERGENCY: Aws\Exception\UnresolvedApiException [ 0 ]: The s3 service does not have version: 1.0.4. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Api/ApiProvider.php [ 82 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:378
2015-08-31 11:14:36 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(378): Aws\Api\ApiProvider::resolve(Object(Aws\Api\ApiProvider), 'api', 's3', '1.0.4')
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(496): Aws\ClientResolver::_apply_api_provider(Object(Aws\Api\ApiProvider), Array, Object(Aws\HandlerList))
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(245): Aws\S3\S3Client::_applyApiProvider(Object(Aws\Api\ApiProvider), Array, Object(Aws\HandlerList))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(137): Aws\ClientResolver->resolve(Array, Object(Aws\HandlerList))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(62): Aws\AwsClient->__construct(Array)
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(349): Aws\S3\S3Client->__construct(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(22): Aws\AwsClient::factory(Array)
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(37): FileSystem_Factory::s3()
#8 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#9 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#15 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:378
2015-08-31 11:14:37 --- EMERGENCY: Aws\Exception\UnresolvedApiException [ 0 ]: The s3 service does not have version: 1.0.4. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Api/ApiProvider.php [ 82 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:378
2015-08-31 11:14:37 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(378): Aws\Api\ApiProvider::resolve(Object(Aws\Api\ApiProvider), 'api', 's3', '1.0.4')
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(496): Aws\ClientResolver::_apply_api_provider(Object(Aws\Api\ApiProvider), Array, Object(Aws\HandlerList))
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(245): Aws\S3\S3Client::_applyApiProvider(Object(Aws\Api\ApiProvider), Array, Object(Aws\HandlerList))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(137): Aws\ClientResolver->resolve(Array, Object(Aws\HandlerList))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(62): Aws\AwsClient->__construct(Array)
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(349): Aws\S3\S3Client->__construct(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(22): Aws\AwsClient::factory(Array)
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(37): FileSystem_Factory::s3()
#8 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#9 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#15 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:378
2015-08-31 11:15:34 --- EMERGENCY: Aws\Exception\UnresolvedApiException [ 0 ]: The s3 service does not have version: 3-8-7. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Api/ApiProvider.php [ 82 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:378
2015-08-31 11:15:34 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(378): Aws\Api\ApiProvider::resolve(Object(Aws\Api\ApiProvider), 'api', 's3', '3-8-7')
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(496): Aws\ClientResolver::_apply_api_provider(Object(Aws\Api\ApiProvider), Array, Object(Aws\HandlerList))
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(245): Aws\S3\S3Client::_applyApiProvider(Object(Aws\Api\ApiProvider), Array, Object(Aws\HandlerList))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(137): Aws\ClientResolver->resolve(Array, Object(Aws\HandlerList))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(62): Aws\AwsClient->__construct(Array)
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(349): Aws\S3\S3Client->__construct(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(22): Aws\AwsClient::factory(Array)
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(37): FileSystem_Factory::s3()
#8 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#9 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#15 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:378
2015-08-31 11:16:27 --- EMERGENCY: Aws\Exception\UnresolvedApiException [ 0 ]: The s3 service does not have version: 3.3.2. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Api/ApiProvider.php [ 82 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:378
2015-08-31 11:16:27 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(378): Aws\Api\ApiProvider::resolve(Object(Aws\Api\ApiProvider), 'api', 's3', '3.3.2')
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(496): Aws\ClientResolver::_apply_api_provider(Object(Aws\Api\ApiProvider), Array, Object(Aws\HandlerList))
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(245): Aws\S3\S3Client::_applyApiProvider(Object(Aws\Api\ApiProvider), Array, Object(Aws\HandlerList))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(137): Aws\ClientResolver->resolve(Array, Object(Aws\HandlerList))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(62): Aws\AwsClient->__construct(Array)
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(349): Aws\S3\S3Client->__construct(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(22): Aws\AwsClient::factory(Array)
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(37): FileSystem_Factory::s3()
#8 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#9 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#15 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:378
2015-08-31 11:16:29 --- EMERGENCY: Aws\Exception\UnresolvedApiException [ 0 ]: The s3 service does not have version: 3.3.2. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Api/ApiProvider.php [ 82 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:378
2015-08-31 11:16:29 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(378): Aws\Api\ApiProvider::resolve(Object(Aws\Api\ApiProvider), 'api', 's3', '3.3.2')
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(496): Aws\ClientResolver::_apply_api_provider(Object(Aws\Api\ApiProvider), Array, Object(Aws\HandlerList))
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(245): Aws\S3\S3Client::_applyApiProvider(Object(Aws\Api\ApiProvider), Array, Object(Aws\HandlerList))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(137): Aws\ClientResolver->resolve(Array, Object(Aws\HandlerList))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(62): Aws\AwsClient->__construct(Array)
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(349): Aws\S3\S3Client->__construct(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(22): Aws\AwsClient::factory(Array)
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(37): FileSystem_Factory::s3()
#8 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#9 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#15 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:378
2015-08-31 11:18:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')', expecting ']' ~ DOCROOT/mamaplaats/core/classes/FileSystem/Factory.php [ 21 ] in file:line
2015-08-31 11:18:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-31 11:18:42 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:18:42 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(32): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:12 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:12 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:13 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:13 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:14 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:14 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:14 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:14 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:15 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:15 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:15 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:15 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:16 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:16 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:16 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:16 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:16 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:16 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:17 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:17 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:56 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:56 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:58 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:19:58 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:20:04 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:20:04 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:20:06 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:20:06 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:20:07 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:20:07 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:20:07 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:20:07 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:20:08 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:20:08 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:20:09 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:20:09 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:20:10 --- EMERGENCY: Guzzle\Common\Exception\RuntimeException [ 0 ]: /tmp/guzzle-cacert.pem MD5 mismatch: expected 349ba2d6964db9ca558c9e1daf38e428 but got 6c81b1339b320190689e4c2d594ca67f ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php [ 354 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:20:10 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(469): Guzzle\Http\Client->preparePharCacert()
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php(74): Guzzle\Http\Client->initSsl()
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/AbstractClient.php(78): Guzzle\Http\Client->__construct('http://s3.amazo...', Object(Guzzle\Common\Collection))
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Common/Client/ClientBuilder.php(252): Aws\Common\Client\AbstractClient->__construct(Object(Aws\Common\Credentials\Credentials), Object(Aws\S3\S3Signature), Object(Guzzle\Common\Collection))
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(220): Aws\Common\Client\ClientBuilder->build()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\S3\S3Client::factory(Array)
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#7 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#14 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Guzzle/Http/Client.php:469
2015-08-31 11:20:20 --- EMERGENCY: InvalidArgumentException [ 0 ]: Missing required client configuration options: 

region: (string)

  A "region" configuration value is required for the "s3" service
  (e.g., "us-west-2"). A list of available public regions and endpoints can be
  found at http://docs.aws.amazon.com/general/latest/gr/rande.html.

version: (string)

  A "version" configuration value is required. Specifying a version constraint
  ensures that your code will not be affected by a breaking change made to the
  service. For example, when using Amazon S3, you can lock your API version to
  "2006-03-01".
  
  Your build of the SDK has the following version(s) of "s3": * "2006-03-01"
  
  You may provide "latest" to the "version" configuration value to utilize the
  most recent available API version that your client's API provider can find.
  Note: Using 'latest' in a production application is not recommended.
  
  A list of available API versions can be found on each client's API documentation
  page: http://docs.aws.amazon.com/aws-sdk-php/v3/api/index.html. If you are
  unable to load a specific API version, then you may need to update your copy of
  the SDK. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php [ 328 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:224
2015-08-31 11:20:20 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(224): Aws\ClientResolver->throwRequired(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(137): Aws\ClientResolver->resolve(Array, Object(Aws\HandlerList))
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(62): Aws\AwsClient->__construct(Array)
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(349): Aws\S3\S3Client->__construct(Array)
#4 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(17): Aws\AwsClient::factory(Array)
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#7 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#13 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:224
2015-08-31 11:22:25 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1002 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 11:22:25 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ResultPaginator.php(128): Aws\AwsClient->execute(Object(Aws\Command))
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/functions.php(51): Aws\ResultPaginator->valid()
#15 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/functions.php(68): Aws\map(Object(Aws\ResultPaginator), Object(Closure))
#16 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(23): Aws\flatmap(Object(Aws\ResultPaginator), Object(Closure))
#17 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#19 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#20 [internal function]: Kohana_Controller->execute()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#22 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#24 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#25 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 11:26:50 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1001 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 11:26:50 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ResultPaginator.php(128): Aws\AwsClient->execute(Object(Aws\Command))
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/functions.php(51): Aws\ResultPaginator->valid()
#15 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/functions.php(68): Aws\map(Object(Aws\ResultPaginator), Object(Closure))
#16 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(23): Aws\flatmap(Object(Aws\ResultPaginator), Object(Closure))
#17 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#19 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#20 [internal function]: Kohana_Controller->execute()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#22 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#24 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#25 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 11:27:42 --- EMERGENCY: InvalidArgumentException [ 0 ]: Missing required client configuration options: 

region: (string)

  A "region" configuration value is required for the "s3" service
  (e.g., "us-west-2"). A list of available public regions and endpoints can be
  found at http://docs.aws.amazon.com/general/latest/gr/rande.html. ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php [ 328 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:224
2015-08-31 11:27:42 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php(224): Aws\ClientResolver->throwRequired(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(137): Aws\ClientResolver->resolve(Array, Object(Aws\HandlerList))
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(62): Aws\AwsClient->__construct(Array)
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(349): Aws\S3\S3Client->__construct(Array)
#4 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(19): Aws\AwsClient::factory(Array)
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(36): FileSystem_Factory::s3()
#6 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#7 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#13 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ClientResolver.php:224
2015-08-31 12:18:14 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1001 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:18:14 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ResultPaginator.php(128): Aws\AwsClient->execute(Object(Aws\Command))
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/functions.php(51): Aws\ResultPaginator->valid()
#15 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/functions.php(68): Aws\map(Object(Aws\ResultPaginator), Object(Closure))
#16 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(23): Aws\flatmap(Object(Aws\ResultPaginator), Object(Closure))
#17 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#19 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#20 [internal function]: Kohana_Controller->execute()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#22 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#24 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#25 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:18:52 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1000 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:18:52 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ResultPaginator.php(128): Aws\AwsClient->execute(Object(Aws\Command))
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/functions.php(51): Aws\ResultPaginator->valid()
#15 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/functions.php(68): Aws\map(Object(Aws\ResultPaginator), Object(Closure))
#16 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(23): Aws\flatmap(Object(Aws\ResultPaginator), Object(Closure))
#17 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(34): FileSystem_Factory::s3()
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#19 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#20 [internal function]: Kohana_Controller->execute()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#22 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#24 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#25 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:20:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'Access' (T_STRING) ~ DOCROOT/mamaplaats/core/classes/FileSystem/Factory.php [ 22 ] in file:line
2015-08-31 12:20:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-31 12:20:18 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1001 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:20:18 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ResultPaginator.php(128): Aws\AwsClient->execute(Object(Aws\Command))
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/functions.php(51): Aws\ResultPaginator->valid()
#15 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/functions.php(68): Aws\map(Object(Aws\ResultPaginator), Object(Closure))
#16 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(25): Aws\flatmap(Object(Aws\ResultPaginator), Object(Closure))
#17 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(36): FileSystem_Factory::s3()
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#19 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#20 [internal function]: Kohana_Controller->execute()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#22 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#24 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#25 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:20:42 --- EMERGENCY: ErrorException [ 4096 ]: Argument 2 passed to Aws\AwsClient::getCommand() must be of the type array, string given, called in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php on line 167 and defined ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php [ 211 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php:211
2015-08-31 12:20:42 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(211): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'phar:///var/www...', 211, Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(167): Aws\AwsClient->getCommand('listObjects', 'img.testing.mam...')
#2 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(23): Aws\AwsClient->__call('listObjects', Array)
#3 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(23): Aws\S3\S3Client->listObjects('img.testing.mam...')
#4 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(31): FileSystem_Factory::s3()
#5 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#6 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#9 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#12 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php:211
2015-08-31 12:21:13 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1001 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:21:13 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/ResultPaginator.php(128): Aws\AwsClient->execute(Object(Aws\Command))
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/functions.php(51): Aws\ResultPaginator->valid()
#15 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/functions.php(68): Aws\map(Object(Aws\ResultPaginator), Object(Closure))
#16 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(25): Aws\flatmap(Object(Aws\ResultPaginator), Object(Closure))
#17 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(36): FileSystem_Factory::s3()
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#19 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#20 [internal function]: Kohana_Controller->execute()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#22 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#24 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#25 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:25:29 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1001 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:25:29 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(224): Aws\AwsClient->execute(Object(Aws\Command))
#14 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(170): League\Flysystem\Adapter\AwsS3->getMetadata('test.txt')
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(54): League\Flysystem\Adapter\AwsS3->has('test.txt')
#16 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(394): League\Flysystem\Filesystem->has('test.txt')
#17 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(63): League\Flysystem\Filesystem->assertAbsent('test.txt')
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(20): League\Flysystem\Filesystem->write('test.txt', 'test file', Array)
#19 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(26): FileSystem_Upload->website_logo()
#20 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#22 [internal function]: Kohana_Controller->execute()
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#24 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#25 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#26 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#27 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:26:00 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1001 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:26:00 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(224): Aws\AwsClient->execute(Object(Aws\Command))
#14 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(170): League\Flysystem\Adapter\AwsS3->getMetadata('test.txt')
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(54): League\Flysystem\Adapter\AwsS3->has('test.txt')
#16 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(394): League\Flysystem\Filesystem->has('test.txt')
#17 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(63): League\Flysystem\Filesystem->assertAbsent('test.txt')
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(22): League\Flysystem\Filesystem->write('test.txt', 'test file', Array)
#19 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(26): FileSystem_Upload->website_logo()
#20 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#22 [internal function]: Kohana_Controller->execute()
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#24 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#25 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#26 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#27 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:37:18 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: filesystem ~ DOCROOT/mamaplaats/core/classes/FileSystem/Upload.php [ 24 ] in /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php:24
2015-08-31 12:37:18 --- DEBUG: #0 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/mamapl...', 24, Array)
#1 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(26): FileSystem_Upload->website_logo()
#2 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#3 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#6 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#9 {main} in /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php:24
2015-08-31 12:37:35 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1001 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:37:35 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(224): Aws\AwsClient->execute(Object(Aws\Command))
#14 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(170): League\Flysystem\Adapter\AwsS3->getMetadata('test.txt')
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(54): League\Flysystem\Adapter\AwsS3->has('test.txt')
#16 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(24): League\Flysystem\Filesystem->has('test.txt')
#17 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(26): FileSystem_Upload->website_logo()
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#19 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#20 [internal function]: Kohana_Controller->execute()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#22 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#24 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#25 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:38:20 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1001 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:38:20 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(224): Aws\AwsClient->execute(Object(Aws\Command))
#14 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(170): League\Flysystem\Adapter\AwsS3->getMetadata('test.txt')
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(54): League\Flysystem\Adapter\AwsS3->has('test.txt')
#16 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(24): League\Flysystem\Filesystem->has('test.txt')
#17 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(26): FileSystem_Upload->website_logo()
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#19 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#20 [internal function]: Kohana_Controller->execute()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#22 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#24 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#25 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:39:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: FileSystem_Upload::$_file_systemm ~ DOCROOT/mamaplaats/core/classes/FileSystem/Upload.php [ 26 ] in /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php:26
2015-08-31 12:39:30 --- DEBUG: #0 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(26): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/mamapl...', 26, Array)
#1 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(26): FileSystem_Upload->website_logo()
#2 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#3 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#6 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#9 {main} in /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php:26
2015-08-31 12:40:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: FileSystem_Upload::$_file_systemm ~ DOCROOT/mamaplaats/core/classes/FileSystem/Upload.php [ 26 ] in /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php:26
2015-08-31 12:40:05 --- DEBUG: #0 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(26): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/mamapl...', 26, Array)
#1 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(26): FileSystem_Upload->website_logo()
#2 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#3 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#6 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#9 {main} in /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php:26
2015-08-31 12:40:18 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1001 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:40:18 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(315): Aws\AwsClient->execute(Object(Aws\Command))
#14 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(447): Aws\S3\S3Client->upload('img.testing.mam...', 'test/', '', 'private', Array)
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(159): League\Flysystem\Adapter\AwsS3->upload('test/', '', Object(League\Flysystem\Config))
#16 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(259): League\Flysystem\Adapter\AwsS3->createDir('test', Object(League\Flysystem\Config))
#17 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(26): League\Flysystem\Filesystem->createDir('test/')
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(26): FileSystem_Upload->website_logo()
#19 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#20 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#21 [internal function]: Kohana_Controller->execute()
#22 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#24 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#25 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#26 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:43:14 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1001 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 12:43:14 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(315): Aws\AwsClient->execute(Object(Aws\Command))
#14 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(447): Aws\S3\S3Client->upload('img.testing.mam...', 'test/', '', 'private', Array)
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(159): League\Flysystem\Adapter\AwsS3->upload('test/', '', Object(League\Flysystem\Config))
#16 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(259): League\Flysystem\Adapter\AwsS3->createDir('test', Object(League\Flysystem\Config))
#17 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(35): League\Flysystem\Filesystem->createDir('test/')
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(26): FileSystem_Upload->website_logo()
#19 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#20 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#21 [internal function]: Kohana_Controller->execute()
#22 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#24 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#25 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#26 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 13:17:24 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find blog with slug: gezellig-bevallen-met-al-je-vrienden-en-familie ~ DOCROOT/mamaplaats/core/classes/Controller/Blog.php [ 49 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 13:17:24 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Blog->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 13:17:24 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find blog with slug: gezellig-bevallen-met-al-je-vrienden-en-familie ~ DOCROOT/mamaplaats/core/classes/Controller/Blog.php [ 49 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 13:17:24 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Blog->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blog))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 13:17:27 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: blog ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 13:17:27 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 13:17:27 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: blog ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 13:17:27 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 13:30:50 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/legacy/2015/07/bevallen_150x.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 13:30:50 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 13:30:50 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/legacy/2015/07/bevallen_150x.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 13:30:50 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 13:47:28 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1001 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 13:47:28 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/S3/S3Client.php(315): Aws\AwsClient->execute(Object(Aws\Command))
#14 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(447): Aws\S3\S3Client->upload('img.testing.mam...', 'test/', '', 'private', Array)
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(159): League\Flysystem\Adapter\AwsS3->upload('test/', '', Object(League\Flysystem\Config))
#16 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(259): League\Flysystem\Adapter\AwsS3->createDir('test', Object(League\Flysystem\Config))
#17 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(35): League\Flysystem\Filesystem->createDir('test/')
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(26): FileSystem_Upload->website_logo()
#19 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#20 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#21 [internal function]: Kohana_Controller->execute()
#22 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#24 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#25 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#26 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 13:49:19 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1001 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 13:49:19 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(224): Aws\AwsClient->execute(Object(Aws\Command))
#14 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(170): League\Flysystem\Adapter\AwsS3->getMetadata('test.txt')
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(54): League\Flysystem\Adapter\AwsS3->has('test.txt')
#16 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(33): League\Flysystem\Filesystem->has('test.txt')
#17 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(26): FileSystem_Upload->website_logo()
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#19 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#20 [internal function]: Kohana_Controller->execute()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#22 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#24 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#25 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 13:54:07 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1001 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 13:54:07 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(224): Aws\AwsClient->execute(Object(Aws\Command))
#14 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(170): League\Flysystem\Adapter\AwsS3->getMetadata('s3:/img.test.ma...')
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(54): League\Flysystem\Adapter\AwsS3->has('s3:/img.test.ma...')
#16 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(33): League\Flysystem\Filesystem->has('s3://img.test.m...')
#17 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(26): FileSystem_Upload->website_logo()
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#19 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#20 [internal function]: Kohana_Controller->execute()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#22 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#24 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#25 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 13:54:40 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: League\Flysystem\Filesystem::$has ~ DOCROOT/mamaplaats/core/classes/FileSystem/Upload.php [ 32 ] in /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php:32
2015-08-31 13:54:40 --- DEBUG: #0 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(32): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/mamapl...', 32, Array)
#1 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(26): FileSystem_Upload->website_logo()
#2 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#3 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#6 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#9 {main} in /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php:32
2015-08-31 13:56:39 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1001 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 13:56:39 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(224): Aws\AwsClient->execute(Object(Aws\Command))
#14 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(170): League\Flysystem\Adapter\AwsS3->getMetadata('s3:/img.test.ma...')
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(54): League\Flysystem\Adapter\AwsS3->has('s3:/img.test.ma...')
#16 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(380): League\Flysystem\Filesystem->has('s3:/img.test.ma...')
#17 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(176): League\Flysystem\Filesystem->assertPresent('s3:/img.test.ma...')
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(33): League\Flysystem\Filesystem->read('s3://img.test.m...')
#19 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(26): FileSystem_Upload->website_logo()
#20 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#22 [internal function]: Kohana_Controller->execute()
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#24 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#25 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#26 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#27 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 13:57:32 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1001 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 13:57:32 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(224): Aws\AwsClient->execute(Object(Aws\Command))
#14 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(170): League\Flysystem\Adapter\AwsS3->getMetadata('test/schattig_7...')
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(54): League\Flysystem\Adapter\AwsS3->has('test/schattig_7...')
#16 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(380): League\Flysystem\Filesystem->has('test/schattig_7...')
#17 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(176): League\Flysystem\Filesystem->assertPresent('test/schattig_7...')
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(33): League\Flysystem\Filesystem->read('test/schattig_7...')
#19 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(26): FileSystem_Upload->website_logo()
#20 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#22 [internal function]: Kohana_Controller->execute()
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#24 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#25 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#26 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#27 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 13:58:56 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1001 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 13:58:56 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(224): Aws\AwsClient->execute(Object(Aws\Command))
#14 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(170): League\Flysystem\Adapter\AwsS3->getMetadata('test/schattig_7...')
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(54): League\Flysystem\Adapter\AwsS3->has('test/schattig_7...')
#16 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(380): League\Flysystem\Filesystem->has('test/schattig_7...')
#17 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(176): League\Flysystem\Filesystem->assertPresent('test/schattig_7...')
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(33): League\Flysystem\Filesystem->read('test/schattig_7...')
#19 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(26): FileSystem_Upload->website_logo()
#20 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#22 [internal function]: Kohana_Controller->execute()
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#24 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#25 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#26 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#27 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 14:00:30 --- EMERGENCY: Aws\Exception\CredentialsException [ 0 ]: Error retrieving credentials from the instance profile metadata server. (cURL error 28: Connection timed out after 1002 milliseconds (see http://curl.haxx.se/libcurl/c/libcurl-errors.html)) ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/Credentials/InstanceProfileProvider.php [ 79 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 14:00:30 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\Credentials\InstanceProfileProvider->Aws\Credentials\{closure}(Array)
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(152): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#13 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(224): Aws\AwsClient->execute(Object(Aws\Command))
#14 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(170): League\Flysystem\Adapter\AwsS3->getMetadata('test.txt')
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(54): League\Flysystem\Adapter\AwsS3->has('test.txt')
#16 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(394): League\Flysystem\Filesystem->has('test.txt')
#17 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(63): League\Flysystem\Filesystem->assertAbsent('test.txt')
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(31): League\Flysystem\Filesystem->write('test.txt', 'test file', Array)
#19 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(26): FileSystem_Upload->website_logo()
#20 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#22 [internal function]: Kohana_Controller->execute()
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#24 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#25 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#26 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#27 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php:199
2015-08-31 14:07:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ''region'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ DOCROOT/mamaplaats/core/classes/FileSystem/Factory.php [ 18 ] in file:line
2015-08-31 14:07:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-31 14:07:26 --- EMERGENCY: Aws\S3\Exception\S3Exception [ 0 ]: Error executing "HeadObject" on "https://s3.eu-central-1.amazonaws.com/s3%3A%2F%2Fimg.testing.mamaplaats.nl%2F/test.txt"; AWS HTTP error: Client error: 403  (client): 403 Forbidden (Request-ID: 6359981A5AE8B02F) -  ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php [ 152 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php:76
2015-08-31 14:07:26 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php(76): Aws\WrappedHttpHandler->parseError(Array, Object(GuzzleHttp\Psr7\Request), Object(Aws\Command))
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\WrappedHttpHandler->Aws\{closure}(Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(170): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/RejectedPromise.php(40): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}(Array)
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\RejectedPromise::GuzzleHttp\Promise\{closure}()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(224): Aws\AwsClient->execute(Object(Aws\Command))
#16 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(170): League\Flysystem\Adapter\AwsS3->getMetadata('test.txt')
#17 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(54): League\Flysystem\Adapter\AwsS3->has('test.txt')
#18 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(394): League\Flysystem\Filesystem->has('test.txt')
#19 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(63): League\Flysystem\Filesystem->assertAbsent('test.txt')
#20 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(30): League\Flysystem\Filesystem->write('test.txt', 'test file', Array)
#21 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(27): FileSystem_Upload->website_logo()
#22 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#23 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#24 [internal function]: Kohana_Controller->execute()
#25 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#26 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#27 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#28 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#29 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php:76
2015-08-31 14:08:18 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for League\Flysystem\Filesystem::write(), called in /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php on line 32 and defined ~ MODPATH/flysystem/vendor/flysystem/src/Filesystem.php [ 60 ] in /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php:60
2015-08-31 14:08:18 --- DEBUG: #0 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(60): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/mamapl...', 60, Array)
#1 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(32): League\Flysystem\Filesystem->write('test/schattig_7...')
#2 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(27): FileSystem_Upload->website_logo()
#3 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#4 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#7 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#10 {main} in /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php:60
2015-08-31 14:08:41 --- EMERGENCY: Aws\S3\Exception\S3Exception [ 0 ]: Error executing "HeadObject" on "https://s3.eu-central-1.amazonaws.com/s3%3A%2F%2Fimg.testing.mamaplaats.nl%2F/test/schattig_750xn.jpg"; AWS HTTP error: Client error: 403  (client): 403 Forbidden (Request-ID: EE534193FD78E01A) -  ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php [ 152 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php:76
2015-08-31 14:08:41 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php(76): Aws\WrappedHttpHandler->parseError(Array, Object(GuzzleHttp\Psr7\Request), Object(Aws\Command))
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\WrappedHttpHandler->Aws\{closure}(Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(170): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/RejectedPromise.php(40): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}(Array)
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\RejectedPromise::GuzzleHttp\Promise\{closure}()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(224): Aws\AwsClient->execute(Object(Aws\Command))
#16 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(170): League\Flysystem\Adapter\AwsS3->getMetadata('test/schattig_7...')
#17 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(54): League\Flysystem\Adapter\AwsS3->has('test/schattig_7...')
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(32): League\Flysystem\Filesystem->has('test/schattig_7...')
#19 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(27): FileSystem_Upload->website_logo()
#20 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#22 [internal function]: Kohana_Controller->execute()
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#24 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#25 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#26 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#27 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php:76
2015-08-31 14:09:07 --- EMERGENCY: Aws\S3\Exception\S3Exception [ 0 ]: Error executing "HeadObject" on "https://s3.eu-central-1.amazonaws.com/%2F%2Fimg.testing.mamaplaats.nl%2F/test/schattig_750xn.jpg"; AWS HTTP error: Client error: 403  (client): 403 Forbidden (Request-ID: 3D139924615B0E09) -  ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php [ 152 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php:76
2015-08-31 14:09:07 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php(76): Aws\WrappedHttpHandler->parseError(Array, Object(GuzzleHttp\Psr7\Request), Object(Aws\Command))
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\WrappedHttpHandler->Aws\{closure}(Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(170): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/RejectedPromise.php(40): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}(Array)
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\RejectedPromise::GuzzleHttp\Promise\{closure}()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(224): Aws\AwsClient->execute(Object(Aws\Command))
#16 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(170): League\Flysystem\Adapter\AwsS3->getMetadata('test/schattig_7...')
#17 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(54): League\Flysystem\Adapter\AwsS3->has('test/schattig_7...')
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(32): League\Flysystem\Filesystem->has('test/schattig_7...')
#19 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(27): FileSystem_Upload->website_logo()
#20 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#22 [internal function]: Kohana_Controller->execute()
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#24 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#25 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#26 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#27 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php:76
2015-08-31 14:10:05 --- EMERGENCY: Aws\S3\Exception\S3Exception [ 0 ]: Error executing "HeadObject" on "https://s3.eu-central-1.amazonaws.com/%2F%2Fimg.testing.mamaplaats.nl/test/schattig_750xn.jpg"; AWS HTTP error: Client error: 403  (client): 403 Forbidden (Request-ID: 0AF3029D10C836A6) -  ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php [ 152 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php:76
2015-08-31 14:10:05 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php(76): Aws\WrappedHttpHandler->parseError(Array, Object(GuzzleHttp\Psr7\Request), Object(Aws\Command))
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\WrappedHttpHandler->Aws\{closure}(Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(170): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/RejectedPromise.php(40): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}(Array)
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\RejectedPromise::GuzzleHttp\Promise\{closure}()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(224): Aws\AwsClient->execute(Object(Aws\Command))
#16 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(170): League\Flysystem\Adapter\AwsS3->getMetadata('test/schattig_7...')
#17 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(54): League\Flysystem\Adapter\AwsS3->has('test/schattig_7...')
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(32): League\Flysystem\Filesystem->has('test/schattig_7...')
#19 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(27): FileSystem_Upload->website_logo()
#20 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#22 [internal function]: Kohana_Controller->execute()
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#24 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#25 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#26 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#27 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php:76
2015-08-31 14:11:46 --- EMERGENCY: Aws\S3\Exception\S3Exception [ 0 ]: Error executing "HeadObject" on "https://s3.eu-central-1.amazonaws.com/%2F%2Fimg.testing.mamaplaats.nl/test.txt"; AWS HTTP error: Client error: 403  (client): 403 Forbidden (Request-ID: 163557BC2C1758CC) -  ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php [ 152 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php:76
2015-08-31 14:11:46 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php(76): Aws\WrappedHttpHandler->parseError(Array, Object(GuzzleHttp\Psr7\Request), Object(Aws\Command))
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\WrappedHttpHandler->Aws\{closure}(Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(170): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/RejectedPromise.php(40): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}(Array)
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\RejectedPromise::GuzzleHttp\Promise\{closure}()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(224): Aws\AwsClient->execute(Object(Aws\Command))
#16 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(170): League\Flysystem\Adapter\AwsS3->getMetadata('test.txt')
#17 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(54): League\Flysystem\Adapter\AwsS3->has('test.txt')
#18 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(394): League\Flysystem\Filesystem->has('test.txt')
#19 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(63): League\Flysystem\Filesystem->assertAbsent('test.txt')
#20 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(30): League\Flysystem\Filesystem->write('test.txt', 'test file', Array)
#21 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(27): FileSystem_Upload->website_logo()
#22 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#23 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#24 [internal function]: Kohana_Controller->execute()
#25 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#26 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#27 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#28 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#29 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php:76
2015-08-31 14:19:33 --- EMERGENCY: Aws\S3\Exception\S3Exception [ 0 ]: Error executing "HeadObject" on "https://s3.eu-central-1.amazonaws.com/%2F%2Fimg.testing.mamaplaats.nl/test/schattig_750xn.jpg"; AWS HTTP error: Client error: 403  (client): 403 Forbidden (Request-ID: C30209DD6A0C166F) -  ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php [ 152 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php:76
2015-08-31 14:19:33 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php(76): Aws\WrappedHttpHandler->parseError(Array, Object(GuzzleHttp\Psr7\Request), Object(Aws\Command))
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\WrappedHttpHandler->Aws\{closure}(Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(170): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/RejectedPromise.php(40): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}(Array)
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\RejectedPromise::GuzzleHttp\Promise\{closure}()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(224): Aws\AwsClient->execute(Object(Aws\Command))
#16 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(170): League\Flysystem\Adapter\AwsS3->getMetadata('test/schattig_7...')
#17 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(54): League\Flysystem\Adapter\AwsS3->has('test/schattig_7...')
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(32): League\Flysystem\Filesystem->has('test/schattig_7...')
#19 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(27): FileSystem_Upload->website_logo()
#20 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#22 [internal function]: Kohana_Controller->execute()
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#24 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#25 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#26 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#27 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php:76
2015-08-31 14:20:14 --- EMERGENCY: Aws\S3\Exception\S3Exception [ 0 ]: Error executing "HeadObject" on "https://s3.eu-central-1.amazonaws.com/%2F%2Fimg.testing.mamaplaats.nl/test/schattig_750xn.jpg"; AWS HTTP error: Client error: 403  (client): 403 Forbidden (Request-ID: 481E76FA5F9DBDD7) -  ~ phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php [ 152 ] in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php:76
2015-08-31 14:20:14 --- DEBUG: #0 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php(76): Aws\WrappedHttpHandler->parseError(Array, Object(GuzzleHttp\Psr7\Request), Object(Aws\Command))
#1 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(199): Aws\WrappedHttpHandler->Aws\{closure}(Array)
#2 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(170): GuzzleHttp\Promise\Promise::callHandler(2, Array, Array)
#3 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/RejectedPromise.php(40): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}(Array)
#4 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/TaskQueue.php(60): GuzzleHttp\Promise\RejectedPromise::GuzzleHttp\Promise\{closure}()
#5 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(96): GuzzleHttp\Promise\TaskQueue->run()
#6 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Handler/CurlMultiHandler.php(123): GuzzleHttp\Handler\CurlMultiHandler->tick()
#7 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(240): GuzzleHttp\Handler\CurlMultiHandler->execute(true)
#8 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(217): GuzzleHttp\Promise\Promise->invokeWaitFn()
#9 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#10 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#11 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(261): GuzzleHttp\Promise\Promise->waitIfPending()
#12 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(219): GuzzleHttp\Promise\Promise->invokeWaitList()
#13 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/GuzzleHttp/Promise/Promise.php(62): GuzzleHttp\Promise\Promise->waitIfPending()
#14 phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/AwsClient.php(202): GuzzleHttp\Promise\Promise->wait()
#15 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(224): Aws\AwsClient->execute(Object(Aws\Command))
#16 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Adapter/AwsS3.php(170): League\Flysystem\Adapter\AwsS3->getMetadata('test/schattig_7...')
#17 /var/www/mamaplaats_application/modules/flysystem/vendor/flysystem/src/Filesystem.php(54): League\Flysystem\Adapter\AwsS3->has('test/schattig_7...')
#18 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Upload.php(32): League\Flysystem\Filesystem->has('test/schattig_7...')
#19 /var/www/mamaplaats_application/mamaplaats/core/classes/FileSystem/Factory.php(27): FileSystem_Upload->website_logo()
#20 /var/www/mamaplaats_application/mamaplaats/core/classes/Controller/User/Blog.php(18): FileSystem_Factory::upload_website_logo()
#21 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_User_Blog->action_index()
#22 [internal function]: Kohana_Controller->execute()
#23 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User_Blog))
#24 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#25 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#26 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#27 {main} in phar:///var/www/mamaplaats_application/modules/flysystem/vendor/aws.phar/Aws/WrappedHttpHandler.php:76
2015-08-31 14:38:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method FileSystem_Factory::upload_blog() ~ DOCROOT/mamaplaats/core/classes/Controller/User/Blog.php [ 102 ] in file:line
2015-08-31 14:38:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-31 14:41:45 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type File_Object as array ~ DOCROOT/mamaplaats/core/classes/FileSystem/Upload.php [ 62 ] in file:line
2015-08-31 14:41:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-31 15:17:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: img.testing.mamaplaats.nl/image/legacy/2015/08/test_1441027062.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:17:46 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:17:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: img.testing.mamaplaats.nl/image/legacy/2015/08/test_1441027062.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:17:46 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:20:57 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: user/blog/index/img.testing.mamaplaats.nl/image/legacy/2015/08/photo_1441027255.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:20:57 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:20:57 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: user/blog/index/img.testing.mamaplaats.nl/image/legacy/2015/08/photo_1441027255.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:20:57 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:20:58 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: user/blog/index/img.testing.mamaplaats.nl/image/legacy/2015/08/photo_1441027255.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:20:58 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:20:58 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: user/blog/index/img.testing.mamaplaats.nl/image/legacy/2015/08/photo_1441027255.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:20:58 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:23:30 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: user/blog/index/https//s3.eu-central-1.amazonaws.com/img.testing.mamaplaats.nl/image/legacy/2015/08/DSCN2041_1441027402.JPG ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:23:30 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:23:30 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: user/blog/index/https//s3.eu-central-1.amazonaws.com/img.testing.mamaplaats.nl/image/legacy/2015/08/DSCN2041_1441027402.JPG ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:23:30 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:23:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: user/blog/index/https/s3.eu-central-1.amazonaws.com/img.testing.mamaplaats.nl/image/legacy/2015/08/DSCN2041_1441027402.JPG ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:23:44 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:23:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: user/blog/index/https/s3.eu-central-1.amazonaws.com/img.testing.mamaplaats.nl/image/legacy/2015/08/DSCN2041_1441027402.JPG ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:23:44 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:56:28 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/legacy/2015/08/DSCN2041_1441025077.JPG ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:56:28 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:56:28 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/legacy/2015/08/DSCN2041_1441025077.JPG ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 15:56:28 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:28 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/no-image_230xn.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:28 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:28 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/no-image_230xn.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:28 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:39 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:39 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:39 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:40 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:40 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/1_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:40 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/1_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:40 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/1_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:40 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/1_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:40 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:40 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:40 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:40 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:50 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:50 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:50 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:50 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:50 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:50 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:50 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:50 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:50 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/1_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:50 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:50 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/1_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:50 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:51 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:51 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:51 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:51 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:51 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:51 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:51 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:04:51 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:06 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:07 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:16 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:16 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:16 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:05:16 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:10:08 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method FileSystem_Factory::profile_picture() ~ DOCROOT/mamaplaats/core/classes/Controller/User/Profile.php [ 113 ] in file:line
2015-08-31 16:10:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-31 16:10:54 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type File_Object as array ~ DOCROOT/mamaplaats/core/classes/FileSystem/Upload.php [ 44 ] in file:line
2015-08-31 16:10:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-08-31 16:13:28 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:28 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:28 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:28 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:28 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:28 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:29 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:53 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:54 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:54 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:54 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:54 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:54 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:54 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:54 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:13:54 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:46 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:46 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:47 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:48 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:48 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:48 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:48 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:48 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:48 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:16:48 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:19 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:19 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:19 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:19 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:19 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:19 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:19 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:19 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:20 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:20 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:20 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:20 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:20 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:20 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:20 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:20 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:20 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:20 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:20 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:18:20 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:33 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:33 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:33 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:33 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:33 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:33 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:34 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:34 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:34 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:34 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:34 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:34 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:34 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:34 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:44 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:44 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:44 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:44 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:45 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:45 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:45 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:45 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:45 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:45 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:45 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:45 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:45 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:45 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:45 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:45 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:19:57 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:20:31 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:16 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:21:46 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:42 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:43 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:43 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:44 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:22:44 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:10 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:10 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:10 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:10 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:11 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:11 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:11 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:11 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:11 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:11 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:11 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:11 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:11 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:11 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:11 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:11 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:11 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:11 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:11 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:11 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:28:28 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/684_100x100.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_140x120.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/default_230x150.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/90917_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/avatar/74077_100x100.jpg ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:29:55 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:41:21 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/legacy/2015/08/DSCN2041_1441025077.JPG ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:41:21 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:41:21 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/legacy/2015/08/DSCN2041_1441025077.JPG ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:41:21 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:41:31 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/no-image_230xn.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:41:31 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:41:31 --- EMERGENCY: HTTP_Exception_404 [ 404 ]: Unable to find page with slug: image/no-image_230xn.png ~ DOCROOT/mamaplaats/core/classes/Controller/Page.php [ 13 ] in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84
2015-08-31 16:41:31 --- DEBUG: #0 /var/www/mamaplaats_application/system/classes/Kohana/Controller.php(84): Controller_Page->action_index()
#1 [internal function]: Kohana_Controller->execute()
#2 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#3 /var/www/mamaplaats_application/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#4 /var/www/mamaplaats_application/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#5 /var/www/mamaplaats_application/index.php(128): Kohana_Request->execute()
#6 {main} in /var/www/mamaplaats_application/system/classes/Kohana/Controller.php:84