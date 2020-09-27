<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite199be29e531b40afc6fbef894f44d12
{
    public static $files = array (
        'ad155f8f1cf0d418fe49e248db8c661b' => __DIR__ . '/..' . '/react/promise/src/functions_include.php',
        'e40631d46120a9c38ea139981f8dab26' => __DIR__ . '/..' . '/ircmaxell/password-compat/lib/password.php',
        'edc6464955a37aa4d5fbf39d40fb6ee7' => __DIR__ . '/..' . '/symfony/polyfill-php55/bootstrap.php',
        '3e2471375464aac821502deb0ac64275' => __DIR__ . '/..' . '/symfony/polyfill-php54/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Php55\\' => 23,
            'Symfony\\Polyfill\\Php54\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\HttpFoundation\\' => 33,
        ),
        'R' => 
        array (
            'React\\Promise\\' => 14,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Stream\\' => 18,
            'GuzzleHttp\\Ring\\' => 16,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Php55\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php55',
        ),
        'Symfony\\Polyfill\\Php54\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php54',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'React\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/react/promise/src',
        ),
        'GuzzleHttp\\Stream\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/streams/src',
        ),
        'GuzzleHttp\\Ring\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/ringphp/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static $classMap = array (
        'BrizyDeploy\\BaseDeploy' => __DIR__ . '/../..' . '/src/BrizyDeploy/BaseDeploy.php',
        'BrizyDeploy\\Deploy' => __DIR__ . '/../..' . '/src/BrizyDeploy/Deploy.php',
        'BrizyDeploy\\Exception\\AppException' => __DIR__ . '/../..' . '/src/BrizyDeploy/Exception/AppException.php',
        'BrizyDeploy\\Exception\\DeployExeption' => __DIR__ . '/../..' . '/src/BrizyDeploy/Exception/DeployExeption.php',
        'BrizyDeploy\\Modal\\App' => __DIR__ . '/../..' . '/src/BrizyDeploy/Modal/App.php',
        'BrizyDeploy\\Modal\\AppRepository' => __DIR__ . '/../..' . '/src/BrizyDeploy/Modal/AppRepository.php',
        'BrizyDeploy\\Modal\\BaseRepository' => __DIR__ . '/../..' . '/src/BrizyDeploy/Modal/BaseRepository.php',
        'BrizyDeploy\\Modal\\Deploy' => __DIR__ . '/../..' . '/src/BrizyDeploy/Modal/Deploy.php',
        'BrizyDeploy\\Modal\\DeployRepository' => __DIR__ . '/../..' . '/src/BrizyDeploy/Modal/DeployRepository.php',
        'BrizyDeploy\\Modal\\Update' => __DIR__ . '/../..' . '/src/BrizyDeploy/Modal/Update.php',
        'BrizyDeploy\\Modal\\UpdateRepository' => __DIR__ . '/../..' . '/src/BrizyDeploy/Modal/UpdateRepository.php',
        'BrizyDeploy\\Update' => __DIR__ . '/../..' . '/src/BrizyDeploy/Update.php',
        'BrizyDeploy\\Utils\\HttpUtils' => __DIR__ . '/../..' . '/src/BrizyDeploy/Utils/HttpUtils.php',
        'CallbackFilterIterator' => __DIR__ . '/..' . '/symfony/polyfill-php54/Resources/stubs/CallbackFilterIterator.php',
        'GuzzleHttp\\BatchResults' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/BatchResults.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\Collection' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Collection.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Event\\AbstractEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/AbstractEvent.php',
        'GuzzleHttp\\Event\\AbstractRequestEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/AbstractRequestEvent.php',
        'GuzzleHttp\\Event\\AbstractRetryableEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/AbstractRetryableEvent.php',
        'GuzzleHttp\\Event\\AbstractTransferEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/AbstractTransferEvent.php',
        'GuzzleHttp\\Event\\BeforeEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/BeforeEvent.php',
        'GuzzleHttp\\Event\\CompleteEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/CompleteEvent.php',
        'GuzzleHttp\\Event\\Emitter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/Emitter.php',
        'GuzzleHttp\\Event\\EmitterInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/EmitterInterface.php',
        'GuzzleHttp\\Event\\EndEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/EndEvent.php',
        'GuzzleHttp\\Event\\ErrorEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/ErrorEvent.php',
        'GuzzleHttp\\Event\\EventInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/EventInterface.php',
        'GuzzleHttp\\Event\\HasEmitterInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/HasEmitterInterface.php',
        'GuzzleHttp\\Event\\HasEmitterTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/HasEmitterTrait.php',
        'GuzzleHttp\\Event\\ListenerAttacherTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/ListenerAttacherTrait.php',
        'GuzzleHttp\\Event\\ProgressEvent' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/ProgressEvent.php',
        'GuzzleHttp\\Event\\RequestEvents' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/RequestEvents.php',
        'GuzzleHttp\\Event\\SubscriberInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Event/SubscriberInterface.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\CouldNotRewindStreamException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/CouldNotRewindStreamException.php',
        'GuzzleHttp\\Exception\\ParseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ParseException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\StateException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/StateException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\Exception\\XmlParseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/XmlParseException.php',
        'GuzzleHttp\\HasDataTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HasDataTrait.php',
        'GuzzleHttp\\Message\\AbstractMessage' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/AbstractMessage.php',
        'GuzzleHttp\\Message\\AppliesHeadersInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/AppliesHeadersInterface.php',
        'GuzzleHttp\\Message\\FutureResponse' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/FutureResponse.php',
        'GuzzleHttp\\Message\\MessageFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/MessageFactory.php',
        'GuzzleHttp\\Message\\MessageFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/MessageFactoryInterface.php',
        'GuzzleHttp\\Message\\MessageInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/MessageInterface.php',
        'GuzzleHttp\\Message\\MessageParser' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/MessageParser.php',
        'GuzzleHttp\\Message\\Request' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/Request.php',
        'GuzzleHttp\\Message\\RequestInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/RequestInterface.php',
        'GuzzleHttp\\Message\\Response' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/Response.php',
        'GuzzleHttp\\Message\\ResponseInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Message/ResponseInterface.php',
        'GuzzleHttp\\Mimetypes' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Mimetypes.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\Post\\MultipartBody' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/MultipartBody.php',
        'GuzzleHttp\\Post\\PostBody' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/PostBody.php',
        'GuzzleHttp\\Post\\PostBodyInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/PostBodyInterface.php',
        'GuzzleHttp\\Post\\PostFile' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/PostFile.php',
        'GuzzleHttp\\Post\\PostFileInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Post/PostFileInterface.php',
        'GuzzleHttp\\Query' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Query.php',
        'GuzzleHttp\\QueryParser' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/QueryParser.php',
        'GuzzleHttp\\RequestFsm' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestFsm.php',
        'GuzzleHttp\\RingBridge' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RingBridge.php',
        'GuzzleHttp\\Ring\\Client\\ClientUtils' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/ClientUtils.php',
        'GuzzleHttp\\Ring\\Client\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/CurlFactory.php',
        'GuzzleHttp\\Ring\\Client\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/CurlHandler.php',
        'GuzzleHttp\\Ring\\Client\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/CurlMultiHandler.php',
        'GuzzleHttp\\Ring\\Client\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/Middleware.php',
        'GuzzleHttp\\Ring\\Client\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/MockHandler.php',
        'GuzzleHttp\\Ring\\Client\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Client/StreamHandler.php',
        'GuzzleHttp\\Ring\\Core' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Core.php',
        'GuzzleHttp\\Ring\\Exception\\CancelledException' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Exception/CancelledException.php',
        'GuzzleHttp\\Ring\\Exception\\CancelledFutureAccessException' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Exception/CancelledFutureAccessException.php',
        'GuzzleHttp\\Ring\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Exception/ConnectException.php',
        'GuzzleHttp\\Ring\\Exception\\RingException' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Exception/RingException.php',
        'GuzzleHttp\\Ring\\Future\\BaseFutureTrait' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/BaseFutureTrait.php',
        'GuzzleHttp\\Ring\\Future\\CompletedFutureArray' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/CompletedFutureArray.php',
        'GuzzleHttp\\Ring\\Future\\CompletedFutureValue' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/CompletedFutureValue.php',
        'GuzzleHttp\\Ring\\Future\\FutureArray' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/FutureArray.php',
        'GuzzleHttp\\Ring\\Future\\FutureArrayInterface' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/FutureArrayInterface.php',
        'GuzzleHttp\\Ring\\Future\\FutureInterface' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/FutureInterface.php',
        'GuzzleHttp\\Ring\\Future\\FutureValue' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/FutureValue.php',
        'GuzzleHttp\\Ring\\Future\\MagicFutureTrait' => __DIR__ . '/..' . '/guzzlehttp/ringphp/src/Future/MagicFutureTrait.php',
        'GuzzleHttp\\Stream\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/AppendStream.php',
        'GuzzleHttp\\Stream\\AsyncReadStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/AsyncReadStream.php',
        'GuzzleHttp\\Stream\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/BufferStream.php',
        'GuzzleHttp\\Stream\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/CachingStream.php',
        'GuzzleHttp\\Stream\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/DroppingStream.php',
        'GuzzleHttp\\Stream\\Exception\\CannotAttachException' => __DIR__ . '/..' . '/guzzlehttp/streams/src/Exception/CannotAttachException.php',
        'GuzzleHttp\\Stream\\Exception\\SeekException' => __DIR__ . '/..' . '/guzzlehttp/streams/src/Exception/SeekException.php',
        'GuzzleHttp\\Stream\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/FnStream.php',
        'GuzzleHttp\\Stream\\GuzzleStreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/streams/src/GuzzleStreamWrapper.php',
        'GuzzleHttp\\Stream\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/InflateStream.php',
        'GuzzleHttp\\Stream\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/LazyOpenStream.php',
        'GuzzleHttp\\Stream\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/LimitStream.php',
        'GuzzleHttp\\Stream\\MetadataStreamInterface' => __DIR__ . '/..' . '/guzzlehttp/streams/src/MetadataStreamInterface.php',
        'GuzzleHttp\\Stream\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/NoSeekStream.php',
        'GuzzleHttp\\Stream\\NullStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/NullStream.php',
        'GuzzleHttp\\Stream\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/PumpStream.php',
        'GuzzleHttp\\Stream\\Stream' => __DIR__ . '/..' . '/guzzlehttp/streams/src/Stream.php',
        'GuzzleHttp\\Stream\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/streams/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Stream\\StreamInterface' => __DIR__ . '/..' . '/guzzlehttp/streams/src/StreamInterface.php',
        'GuzzleHttp\\Stream\\Utils' => __DIR__ . '/..' . '/guzzlehttp/streams/src/Utils.php',
        'GuzzleHttp\\Subscriber\\Cookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/Cookie.php',
        'GuzzleHttp\\Subscriber\\History' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/History.php',
        'GuzzleHttp\\Subscriber\\HttpError' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/HttpError.php',
        'GuzzleHttp\\Subscriber\\Mock' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/Mock.php',
        'GuzzleHttp\\Subscriber\\Prepare' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/Prepare.php',
        'GuzzleHttp\\Subscriber\\Redirect' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Subscriber/Redirect.php',
        'GuzzleHttp\\ToArrayInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ToArrayInterface.php',
        'GuzzleHttp\\Transaction' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Transaction.php',
        'GuzzleHttp\\UriTemplate' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/UriTemplate.php',
        'GuzzleHttp\\Url' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Url.php',
        'GuzzleHttp\\Utils' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Utils.php',
        'React\\Promise\\CancellablePromiseInterface' => __DIR__ . '/..' . '/react/promise/src/CancellablePromiseInterface.php',
        'React\\Promise\\CancellationQueue' => __DIR__ . '/..' . '/react/promise/src/CancellationQueue.php',
        'React\\Promise\\Deferred' => __DIR__ . '/..' . '/react/promise/src/Deferred.php',
        'React\\Promise\\Exception\\LengthException' => __DIR__ . '/..' . '/react/promise/src/Exception/LengthException.php',
        'React\\Promise\\ExtendedPromiseInterface' => __DIR__ . '/..' . '/react/promise/src/ExtendedPromiseInterface.php',
        'React\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/react/promise/src/FulfilledPromise.php',
        'React\\Promise\\LazyPromise' => __DIR__ . '/..' . '/react/promise/src/LazyPromise.php',
        'React\\Promise\\Promise' => __DIR__ . '/..' . '/react/promise/src/Promise.php',
        'React\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/react/promise/src/PromiseInterface.php',
        'React\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/react/promise/src/PromisorInterface.php',
        'React\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/react/promise/src/RejectedPromise.php',
        'React\\Promise\\UnhandledRejectionException' => __DIR__ . '/..' . '/react/promise/src/UnhandledRejectionException.php',
        'RecursiveCallbackFilterIterator' => __DIR__ . '/..' . '/symfony/polyfill-php54/Resources/stubs/RecursiveCallbackFilterIterator.php',
        'SessionHandlerInterface' => __DIR__ . '/..' . '/symfony/polyfill-php54/Resources/stubs/SessionHandlerInterface.php',
        'Symfony\\Component\\HttpFoundation\\AcceptHeader' => __DIR__ . '/..' . '/symfony/http-foundation/AcceptHeader.php',
        'Symfony\\Component\\HttpFoundation\\AcceptHeaderItem' => __DIR__ . '/..' . '/symfony/http-foundation/AcceptHeaderItem.php',
        'Symfony\\Component\\HttpFoundation\\ApacheRequest' => __DIR__ . '/..' . '/symfony/http-foundation/ApacheRequest.php',
        'Symfony\\Component\\HttpFoundation\\BinaryFileResponse' => __DIR__ . '/..' . '/symfony/http-foundation/BinaryFileResponse.php',
        'Symfony\\Component\\HttpFoundation\\Cookie' => __DIR__ . '/..' . '/symfony/http-foundation/Cookie.php',
        'Symfony\\Component\\HttpFoundation\\Exception\\ConflictingHeadersException' => __DIR__ . '/..' . '/symfony/http-foundation/Exception/ConflictingHeadersException.php',
        'Symfony\\Component\\HttpFoundation\\ExpressionRequestMatcher' => __DIR__ . '/..' . '/symfony/http-foundation/ExpressionRequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\FileBag' => __DIR__ . '/..' . '/symfony/http-foundation/FileBag.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\AccessDeniedException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/AccessDeniedException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/FileException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\FileNotFoundException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/FileNotFoundException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\UnexpectedTypeException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/UnexpectedTypeException.php',
        'Symfony\\Component\\HttpFoundation\\File\\Exception\\UploadException' => __DIR__ . '/..' . '/symfony/http-foundation/File/Exception/UploadException.php',
        'Symfony\\Component\\HttpFoundation\\File\\File' => __DIR__ . '/..' . '/symfony/http-foundation/File/File.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesser' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/ExtensionGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\ExtensionGuesserInterface' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/ExtensionGuesserInterface.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\FileBinaryMimeTypeGuesser' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/FileBinaryMimeTypeGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\FileinfoMimeTypeGuesser' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/FileinfoMimeTypeGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeExtensionGuesser' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/MimeTypeExtensionGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesser' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/MimeTypeGuesser.php',
        'Symfony\\Component\\HttpFoundation\\File\\MimeType\\MimeTypeGuesserInterface' => __DIR__ . '/..' . '/symfony/http-foundation/File/MimeType/MimeTypeGuesserInterface.php',
        'Symfony\\Component\\HttpFoundation\\File\\UploadedFile' => __DIR__ . '/..' . '/symfony/http-foundation/File/UploadedFile.php',
        'Symfony\\Component\\HttpFoundation\\HeaderBag' => __DIR__ . '/..' . '/symfony/http-foundation/HeaderBag.php',
        'Symfony\\Component\\HttpFoundation\\IpUtils' => __DIR__ . '/..' . '/symfony/http-foundation/IpUtils.php',
        'Symfony\\Component\\HttpFoundation\\JsonResponse' => __DIR__ . '/..' . '/symfony/http-foundation/JsonResponse.php',
        'Symfony\\Component\\HttpFoundation\\ParameterBag' => __DIR__ . '/..' . '/symfony/http-foundation/ParameterBag.php',
        'Symfony\\Component\\HttpFoundation\\RedirectResponse' => __DIR__ . '/..' . '/symfony/http-foundation/RedirectResponse.php',
        'Symfony\\Component\\HttpFoundation\\Request' => __DIR__ . '/..' . '/symfony/http-foundation/Request.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcher' => __DIR__ . '/..' . '/symfony/http-foundation/RequestMatcher.php',
        'Symfony\\Component\\HttpFoundation\\RequestMatcherInterface' => __DIR__ . '/..' . '/symfony/http-foundation/RequestMatcherInterface.php',
        'Symfony\\Component\\HttpFoundation\\RequestStack' => __DIR__ . '/..' . '/symfony/http-foundation/RequestStack.php',
        'Symfony\\Component\\HttpFoundation\\Response' => __DIR__ . '/..' . '/symfony/http-foundation/Response.php',
        'Symfony\\Component\\HttpFoundation\\ResponseHeaderBag' => __DIR__ . '/..' . '/symfony/http-foundation/ResponseHeaderBag.php',
        'Symfony\\Component\\HttpFoundation\\ServerBag' => __DIR__ . '/..' . '/symfony/http-foundation/ServerBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Attribute/AttributeBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\AttributeBagInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Attribute/AttributeBagInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Attribute\\NamespacedAttributeBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Attribute/NamespacedAttributeBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Flash\\AutoExpireFlashBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Flash/AutoExpireFlashBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Flash/FlashBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Flash\\FlashBagInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Flash/FlashBagInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Session' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Session.php',
        'Symfony\\Component\\HttpFoundation\\Session\\SessionBagInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/SessionBagInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\SessionInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/SessionInterface.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\LegacyPdoSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/LegacyPdoSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MemcacheSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/MemcacheSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MemcachedSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/MemcachedSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\MongoDbSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/MongoDbSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeFileSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/NativeFileSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NativeSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/NativeSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\NullSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/NullSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\PdoSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/PdoSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Handler\\WriteCheckSessionHandler' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Handler/WriteCheckSessionHandler.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MetadataBag' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/MetadataBag.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockArraySessionStorage' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/MockArraySessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\MockFileSessionStorage' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/MockFileSessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\NativeSessionStorage' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/NativeSessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\PhpBridgeSessionStorage' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/PhpBridgeSessionStorage.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\AbstractProxy' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Proxy/AbstractProxy.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\NativeProxy' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Proxy/NativeProxy.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\Proxy\\SessionHandlerProxy' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/Proxy/SessionHandlerProxy.php',
        'Symfony\\Component\\HttpFoundation\\Session\\Storage\\SessionStorageInterface' => __DIR__ . '/..' . '/symfony/http-foundation/Session/Storage/SessionStorageInterface.php',
        'Symfony\\Component\\HttpFoundation\\StreamedResponse' => __DIR__ . '/..' . '/symfony/http-foundation/StreamedResponse.php',
        'Symfony\\Polyfill\\Mbstring\\Mbstring' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/Mbstring.php',
        'Symfony\\Polyfill\\Php54\\Php54' => __DIR__ . '/..' . '/symfony/polyfill-php54/Php54.php',
        'Symfony\\Polyfill\\Php55\\Php55' => __DIR__ . '/..' . '/symfony/polyfill-php55/Php55.php',
        'Symfony\\Polyfill\\Php55\\Php55ArrayColumn' => __DIR__ . '/..' . '/symfony/polyfill-php55/Php55ArrayColumn.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite199be29e531b40afc6fbef894f44d12::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite199be29e531b40afc6fbef894f44d12::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInite199be29e531b40afc6fbef894f44d12::$fallbackDirsPsr4;
            $loader->classMap = ComposerStaticInite199be29e531b40afc6fbef894f44d12::$classMap;

        }, null, ClassLoader::class);
    }
}
