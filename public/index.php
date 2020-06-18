<?php

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 * @author   Taylor Otwell <taylor@laravel.com>
 */

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to utilize it! We'll simply require it
| into the script here so that we don't have to worry about manual
| loading any of our classes later on. It feels great to relax.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Turn On The Lights
|--------------------------------------------------------------------------
|
| We need to illuminate PHP development, so let us turn on the lights.
| This bootstraps the framework and gets it ready for use, then it
| will load up this application so that we can run it and send
| the responses back to the browser and delight our users.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';
// var_dump($app);
/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request
| through the kernel, and send the associated response back to
| the client's browser allowing them to enjoy the creative
| and wonderful application we have prepared for them.
|
*/

// Illuminate\Contracts\Http\Kernel::class 接口

$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);


// object(App\Http\Kernel)#30 (7) {
//     ["middleware":protected]=>
//     array(6) {
//       [0]=>
//       string(32) "App\Http\Middleware\TrustProxies"
//       [1]=>
//       string(25) "Fruitcake\Cors\HandleCors"
//       [2]=>
//       string(43) "App\Http\Middleware\CheckForMaintenanceMode"
//       [3]=>
//       string(54) "Illuminate\Foundation\Http\Middleware\ValidatePostSize"
//       [4]=>
//       string(31) "App\Http\Middleware\TrimStrings"
//       [5]=>
//       string(63) "Illuminate\Foundation\Http\Middleware\ConvertEmptyStringsToNull"
//     }
//     ["middlewareGroups":protected]=>
//     array(2) {
//       ["web"]=>
//       array(6) {
//         [0]=>
//         string(34) "App\Http\Middleware\EncryptCookies"
//         [1]=>
//         string(55) "Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse"
//         [2]=>
//         string(42) "Illuminate\Session\Middleware\StartSession"
//         [3]=>
//         string(49) "Illuminate\View\Middleware\ShareErrorsFromSession"
//         [4]=>
//         string(35) "App\Http\Middleware\VerifyCsrfToken"
//         [5]=>
//         string(48) "Illuminate\Routing\Middleware\SubstituteBindings"
//       }

$response = $kernel->handle(
    $request = Illuminate\Http\Request::capture()
);
// var_dump($response);
// var_dump(Illuminate\Http\Request::capture());
// object(Illuminate\Http\Request)#43 (29) {
//     ["json":protected]=>
//     NULL
//     ["convertedFiles":protected]=>
//     NULL
//     ["userResolver":protected]=>
//     NULL
//     ["routeResolver":protected]=>
//     NULL
//     ["attributes"]=>
//     object(Symfony\Component\HttpFoundation\ParameterBag)#45 (1) {
//       ["parameters":protected]=>
//       array(0) {
//       }
//     }
//     ["request"]=>
//     object(Symfony\Component\HttpFoundation\InputBag)#51 (1) {
//       ["parameters":protected]=>
//       array(0) {
//       }
//     }
//     ["query"]=>
//     object(Symfony\Component\HttpFoundation\InputBag)#51 (1) {
//       ["parameters":protected]=>
//       array(0) {
//       }
//     }
//     ["server"]=>
//     object(Symfony\Component\HttpFoundation\ServerBag)#47 (1) {
//       ["parameters":protected]=>
//       array(27) {
//         ["DOCUMENT_ROOT"]=>
//         string(22) "D:\webroot\blog\public"
//         ["REMOTE_ADDR"]=>
//         string(9) "127.0.0.1"
//         ["REMOTE_PORT"]=>
//         string(5) "51538"
//         ["SERVER_SOFTWARE"]=>
//         string(28) "PHP 7.3.4 Development Server"
//         ["SERVER_PROTOCOL"]=>
//         string(8) "HTTP/1.1"
//         ["SERVER_NAME"]=>
//         string(9) "127.0.0.1"
//         ["SERVER_PORT"]=>
//         string(4) "8000"
//         ["REQUEST_URI"]=>
//         string(1) "/"

$response->send();

$kernel->terminate($request, $response);
