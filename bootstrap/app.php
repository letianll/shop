<?php

/*
|--------------------------------------------------------------------------
| Create The Application
|--------------------------------------------------------------------------
|
| The first thing we will do is create a new Laravel application instance
| which serves as the "glue" for all the components of Laravel, and is
| the IoC container for the system binding all of the various parts.
|
*/
// var_dump( $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__));  框架的主目录地址 string(15) "D:\webroot\blog"
$app = new Illuminate\Foundation\Application(   
    $_ENV['APP_BASE_PATH'] ?? dirname(__DIR__)
);

/*
|--------------------------------------------------------------------------
| Bind Important Interfaces
|--------------------------------------------------------------------------
|
| Next, we need to bind some important interfaces into the container so
| we will be able to resolve them when needed. The kernels serve the
| incoming requests to this application from both the web and CLI.
|
*/
//绑定类的实现到接口，使得依赖注入是`Illuminate\Contracts\Http\Kerne`接口类
//可以得到`App\Http\Kernel::class`类，另外两个绑定同理。
$app->singleton(
    Illuminate\Contracts\Http\Kernel::class,
    App\Http\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Console\Kernel::class,
    App\Console\Kernel::class
);

$app->singleton(
    Illuminate\Contracts\Debug\ExceptionHandler::class,
    App\Exceptions\Handler::class
);

/*
|--------------------------------------------------------------------------
| Return The Application
|--------------------------------------------------------------------------
|
| This script returns the application instance. The instance is given to
| the calling script so we can separate the building of the instances
| from the actual running of the application and sending responses.
|
*/

return $app;

// var_dump($app);
/**
 * 
object(Illuminate\Foundation\Application)#2 (33) {
  ["basePath":protected]=>
  string(15) "D:\webroot\blog"
  ["hasBeenBootstrapped":protected]=>
  bool(false)
  ["booted":protected]=>
  bool(false)
  ["bootingCallbacks":protected]=>
  array(0) {
  }
  ["bootedCallbacks":protected]=>
  array(0) {
  }
  ["terminatingCallbacks":protected]=>
  array(0) {
  }
  ["serviceProviders":protected]=>
  array(3) {
    [0]=>
    object(Illuminate\Events\EventServiceProvider)#6 (1) {
      ["app":protected]=>
      *RECURSION*
    }
    [1]=>
    object(Illuminate\Log\LogServiceProvider)#8 (1) {
      ["app":protected]=>
      *RECURSION*
    }
    [2]=>
    object(Illuminate\Routing\RoutingServiceProvider)#10 (1) {
      ["app":protected]=>
      *RECURSION*
    }
  }
  ["loadedProviders":protected]=>
  array(3) {
    ["Illuminate\Events\EventServiceProvider"]=>
    bool(true)
    ["Illuminate\Log\LogServiceProvider"]=>
    bool(true)
    ["Illuminate\Routing\RoutingServiceProvider"]=>
    bool(true)
  }
  ["deferredServices":protected]=>
  array(0) {
  }
  ["appPath":protected]=>
  NULL
  ["databasePath":protected]=>
  NULL
  ["storagePath":protected]=>
  NULL
  ["environmentPath":protected]=>
  NULL
  ["environmentFile":protected]=>
  string(4) ".env"
  ["isRunningInConsole":protected]=>
  NULL
  ["namespace":protected]=>
  NULL
  ["absoluteCachePathPrefixes":protected]=>
  array(2) {
    [0]=>
    string(1) "/"
    [1]=>
    string(1) "\"
  }
  ["resolved":protected]=>
  array(0) {
  }
  ["bindings":protected]=>
  array(11) {
    ["Illuminate\Foundation\Mix"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#4 (3) {
        ["static"]=>
        array(2) {
          ["abstract"]=>
          string(25) "Illuminate\Foundation\Mix"
          ["concrete"]=>
          string(25) "Illuminate\Foundation\Mix"
        }
        ["this"]=>
        *RECURSION*
        ["parameter"]=>
        array(2) {
          ["$container"]=>
          string(10) "<required>"
          ["$parameters"]=>
          string(10) "<optional>"
        }
      }
      ["shared"]=>
      bool(true)
    }
    ["Illuminate\Foundation\PackageManifest"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#5 (1) {
        ["this"]=>
        *RECURSION*
      }
      ["shared"]=>
      bool(true)
    }
    ["events"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#7 (2) {
        ["this"]=>
        object(Illuminate\Events\EventServiceProvider)#6 (1) {
          ["app":protected]=>
          *RECURSION*
        }
        ["parameter"]=>
        array(1) {
          ["$app"]=>
          string(10) "<required>"
        }
      }
      ["shared"]=>
      bool(true)
    }
    ["log"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#9 (2) {
        ["this"]=>
        object(Illuminate\Log\LogServiceProvider)#8 (1) {
          ["app":protected]=>
          *RECURSION*
        }
        ["parameter"]=>
        array(1) {
          ["$app"]=>
          string(10) "<required>"
        }
      }
      ["shared"]=>
      bool(true)
    }
    ["router"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#11 (2) {
        ["this"]=>
        object(Illuminate\Routing\RoutingServiceProvider)#10 (1) {
          ["app":protected]=>
          *RECURSION*
        }
        ["parameter"]=>
        array(1) {
          ["$app"]=>
          string(10) "<required>"
        }
      }
      ["shared"]=>
      bool(true)
    }
    ["url"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#12 (2) {
        ["this"]=>
        object(Illuminate\Routing\RoutingServiceProvider)#10 (1) {
          ["app":protected]=>
          *RECURSION*
        }
        ["parameter"]=>
        array(1) {
          ["$app"]=>
          string(10) "<required>"
        }
      }
      ["shared"]=>
      bool(true)
    }
    ["redirect"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#14 (2) {
        ["this"]=>
        object(Illuminate\Routing\RoutingServiceProvider)#10 (1) {
          ["app":protected]=>
          *RECURSION*
        }
        ["parameter"]=>
        array(1) {
          ["$app"]=>
          string(10) "<required>"
        }
      }
      ["shared"]=>
      bool(true)
    }
    ["Psr\Http\Message\ServerRequestInterface"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#15 (2) {
        ["this"]=>
        object(Illuminate\Routing\RoutingServiceProvider)#10 (1) {
          ["app":protected]=>
          *RECURSION*
        }
        ["parameter"]=>
        array(1) {
          ["$app"]=>
          string(10) "<required>"
        }
      }
      ["shared"]=>
      bool(false)
    }
    ["Psr\Http\Message\ResponseInterface"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#16 (1) {
        ["this"]=>
        object(Illuminate\Routing\RoutingServiceProvider)#10 (1) {
          ["app":protected]=>
          *RECURSION*
        }
      }
      ["shared"]=>
      bool(false)
    }
    ["Illuminate\Contracts\Routing\ResponseFactory"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#17 (2) {
        ["this"]=>
        object(Illuminate\Routing\RoutingServiceProvider)#10 (1) {
          ["app":protected]=>
          *RECURSION*
        }
        ["parameter"]=>
        array(1) {
          ["$app"]=>
          string(10) "<required>"
        }
      }
      ["shared"]=>
      bool(true)
    }
    ["Illuminate\Routing\Contracts\ControllerDispatcher"]=>
    array(2) {
      ["concrete"]=>
      object(Closure)#18 (2) {
        ["this"]=>
        object(Illuminate\Routing\RoutingServiceProvider)#10 (1) {
          ["app":protected]=>
          *RECURSION*
        }
        ["parameter"]=>
        array(1) {
          ["$app"]=>
          string(10) "<required>"
        }
      }
      ["shared"]=>
      bool(true)
    }
  }
  ["methodBindings":protected]=>
  array(0) {
  }
  ["instances":protected]=>
  array(11) {
    ["path"]=>
    string(19) "D:\webroot\blog\app"
    ["path.base"]=>
    string(15) "D:\webroot\blog"
    ["path.lang"]=>
    string(30) "D:\webroot\blog\resources\lang"
    ["path.config"]=>
    string(22) "D:\webroot\blog\config"
    ["path.public"]=>
    string(22) "D:\webroot\blog\public"
    ["path.storage"]=>
    string(23) "D:\webroot\blog\storage"
    ["path.database"]=>
    string(24) "D:\webroot\blog\database"
    ["path.resources"]=>
    string(25) "D:\webroot\blog\resources"
    ["path.bootstrap"]=>
    string(25) "D:\webroot\blog\bootstrap"
    ["app"]=>
    *RECURSION*
    ["Illuminate\Container\Container"]=>
    *RECURSION*
  }
  ["aliases":protected]=>
  array(73) {
    ["Illuminate\Foundation\Application"]=>
    string(3) "app"
    ["Illuminate\Contracts\Container\Container"]=>
    string(3) "app"
    ["Illuminate\Contracts\Foundation\Application"]=>
    string(3) "app"
    ["Psr\Container\ContainerInterface"]=>
    string(3) "app"
    ["Illuminate\Auth\AuthManager"]=>
    string(4) "auth"
    ["Illuminate\Contracts\Auth\Factory"]=>
    string(4) "auth"
    ["Illuminate\Contracts\Auth\Guard"]=>
    string(11) "auth.driver"
    ["Illuminate\View\Compilers\BladeCompiler"]=>
    string(14) "blade.compiler"
    ["Illuminate\Cache\CacheManager"]=>
    string(5) "cache"
    ["Illuminate\Contracts\Cache\Factory"]=>
    string(5) "cache"
    ["Illuminate\Cache\Repository"]=>
    string(11) "cache.store"
    ["Illuminate\Contracts\Cache\Repository"]=>
    string(11) "cache.store"
    ["Psr\SimpleCache\CacheInterface"]=>
    string(11) "cache.store"
    ["Symfony\Component\Cache\Adapter\Psr16Adapter"]=>
    string(10) "cache.psr6"
    ["Symfony\Component\Cache\Adapter\AdapterInterface"]=>
    string(10) "cache.psr6"
    ["Psr\Cache\CacheItemPoolInterface"]=>
    string(10) "cache.psr6"
    ["Illuminate\Config\Repository"]=>
    string(6) "config"
    ["Illuminate\Contracts\Config\Repository"]=>
    string(6) "config"
    ["Illuminate\Cookie\CookieJar"]=>
    string(6) "cookie"
    ["Illuminate\Contracts\Cookie\Factory"]=>
    string(6) "cookie"
    ["Illuminate\Contracts\Cookie\QueueingFactory"]=>
    string(6) "cookie"
    ["Illuminate\Encryption\Encrypter"]=>
    string(9) "encrypter"
    ["Illuminate\Contracts\Encryption\Encrypter"]=>
    string(9) "encrypter"
    ["Illuminate\Database\DatabaseManager"]=>
    string(2) "db"
    ["Illuminate\Database\ConnectionResolverInterface"]=>
    string(2) "db"
    ["Illuminate\Database\Connection"]=>
    string(13) "db.connection"
    ["Illuminate\Database\ConnectionInterface"]=>
    string(13) "db.connection"
    ["Illuminate\Events\Dispatcher"]=>
    string(6) "events"
    ["Illuminate\Contracts\Events\Dispatcher"]=>
    string(6) "events"
    ["Illuminate\Filesystem\Filesystem"]=>
    string(5) "files"
    ["Illuminate\Filesystem\FilesystemManager"]=>
    string(10) "filesystem"
    ["Illuminate\Contracts\Filesystem\Factory"]=>
    string(10) "filesystem"
    ["Illuminate\Contracts\Filesystem\Filesystem"]=>
    string(15) "filesystem.disk"
    ["Illuminate\Contracts\Filesystem\Cloud"]=>
    string(16) "filesystem.cloud"
    ["Illuminate\Hashing\HashManager"]=>
    string(4) "hash"
    ["Illuminate\Contracts\Hashing\Hasher"]=>
    string(11) "hash.driver"
    ["Illuminate\Translation\Translator"]=>
    string(10) "translator"
    ["Illuminate\Contracts\Translation\Translator"]=>
    string(10) "translator"
    ["Illuminate\Log\LogManager"]=>
    string(3) "log"
    ["Psr\Log\LoggerInterface"]=>
    string(3) "log"
    ["Illuminate\Mail\MailManager"]=>
    string(12) "mail.manager"
    ["Illuminate\Contracts\Mail\Factory"]=>
    string(12) "mail.manager"
    ["Illuminate\Mail\Mailer"]=>
    string(6) "mailer"
    ["Illuminate\Contracts\Mail\Mailer"]=>
    string(6) "mailer"
    ["Illuminate\Contracts\Mail\MailQueue"]=>
    string(6) "mailer"
    ["Illuminate\Auth\Passwords\PasswordBrokerManager"]=>
    string(13) "auth.password"
    ["Illuminate\Contracts\Auth\PasswordBrokerFactory"]=>
    string(13) "auth.password"
    ["Illuminate\Auth\Passwords\PasswordBroker"]=>
    string(20) "auth.password.broker"
    ["Illuminate\Contracts\Auth\PasswordBroker"]=>
    string(20) "auth.password.broker"
    ["Illuminate\Queue\QueueManager"]=>
    string(5) "queue"
    ["Illuminate\Contracts\Queue\Factory"]=>
    string(5) "queue"
    ["Illuminate\Contracts\Queue\Monitor"]=>
    string(5) "queue"
    ["Illuminate\Contracts\Queue\Queue"]=>
    string(16) "queue.connection"
    ["Illuminate\Queue\Failed\FailedJobProviderInterface"]=>
    string(12) "queue.failer"
    ["Illuminate\Routing\Redirector"]=>
    string(8) "redirect"
    ["Illuminate\Redis\RedisManager"]=>
    string(5) "redis"
    ["Illuminate\Contracts\Redis\Factory"]=>
    string(5) "redis"
    ["Illuminate\Redis\Connections\Connection"]=>
    string(16) "redis.connection"
    ["Illuminate\Contracts\Redis\Connection"]=>
    string(16) "redis.connection"
    ["Illuminate\Http\Request"]=>
    string(7) "request"
    ["Symfony\Component\HttpFoundation\Request"]=>
    string(7) "request"
    ["Illuminate\Routing\Router"]=>
    string(6) "router"
    ["Illuminate\Contracts\Routing\Registrar"]=>
    string(6) "router"
    ["Illuminate\Contracts\Routing\BindingRegistrar"]=>
    string(6) "router"
    ["Illuminate\Session\SessionManager"]=>
    string(7) "session"
    ["Illuminate\Session\Store"]=>
    string(13) "session.store"
    ["Illuminate\Contracts\Session\Session"]=>
    string(13) "session.store"
    ["Illuminate\Routing\UrlGenerator"]=>
    string(3) "url"
    ["Illuminate\Contracts\Routing\UrlGenerator"]=>
    string(3) "url"
    ["Illuminate\Validation\Factory"]=>
    string(9) "validator"
    ["Illuminate\Contracts\Validation\Factory"]=>
    string(9) "validator"
    ["Illuminate\View\Factory"]=>
    string(4) "view"
    ["Illuminate\Contracts\View\Factory"]=>
    string(4) "view"
  }
  ["abstractAliases":protected]=>
  array(38) {
    ["app"]=>
    array(4) {
      [0]=>
      string(33) "Illuminate\Foundation\Application"
      [1]=>
      string(40) "Illuminate\Contracts\Container\Container"
      [2]=>
      string(43) "Illuminate\Contracts\Foundation\Application"
      [3]=>
      string(32) "Psr\Container\ContainerInterface"
    }
    ["auth"]=>
    array(2) {
      [0]=>
      string(27) "Illuminate\Auth\AuthManager"
      [1]=>
      string(33) "Illuminate\Contracts\Auth\Factory"
    }
    ["auth.driver"]=>
    array(1) {
      [0]=>
      string(31) "Illuminate\Contracts\Auth\Guard"
    }
    ["blade.compiler"]=>
    array(1) {
      [0]=>
      string(39) "Illuminate\View\Compilers\BladeCompiler"
    }
    ["cache"]=>
    array(2) {
      [0]=>
      string(29) "Illuminate\Cache\CacheManager"
      [1]=>
      string(34) "Illuminate\Contracts\Cache\Factory"
    }
    ["cache.store"]=>
    array(3) {
      [0]=>
      string(27) "Illuminate\Cache\Repository"
      [1]=>
      string(37) "Illuminate\Contracts\Cache\Repository"
      [2]=>
      string(30) "Psr\SimpleCache\CacheInterface"
    }
    ["cache.psr6"]=>
    array(3) {
      [0]=>
      string(44) "Symfony\Component\Cache\Adapter\Psr16Adapter"
      [1]=>
      string(48) "Symfony\Component\Cache\Adapter\AdapterInterface"
      [2]=>
      string(32) "Psr\Cache\CacheItemPoolInterface"
    }
    ["config"]=>
    array(2) {
      [0]=>
      string(28) "Illuminate\Config\Repository"
      [1]=>
      string(38) "Illuminate\Contracts\Config\Repository"
    }
    ["cookie"]=>
    array(3) {
      [0]=>
      string(27) "Illuminate\Cookie\CookieJar"
      [1]=>
      string(35) "Illuminate\Contracts\Cookie\Factory"
      [2]=>
      string(43) "Illuminate\Contracts\Cookie\QueueingFactory"
    }
    ["encrypter"]=>
    array(2) {
      [0]=>
      string(31) "Illuminate\Encryption\Encrypter"
      [1]=>
      string(41) "Illuminate\Contracts\Encryption\Encrypter"
    }
    ["db"]=>
    array(2) {
      [0]=>
      string(35) "Illuminate\Database\DatabaseManager"
      [1]=>
      string(47) "Illuminate\Database\ConnectionResolverInterface"
    }
    ["db.connection"]=>
    array(2) {
      [0]=>
      string(30) "Illuminate\Database\Connection"
      [1]=>
      string(39) "Illuminate\Database\ConnectionInterface"
    }
    ["events"]=>
    array(2) {
      [0]=>
      string(28) "Illuminate\Events\Dispatcher"
      [1]=>
      string(38) "Illuminate\Contracts\Events\Dispatcher"
    }
    ["files"]=>
    array(1) {
      [0]=>
      string(32) "Illuminate\Filesystem\Filesystem"
    }
    ["filesystem"]=>
    array(2) {
      [0]=>
      string(39) "Illuminate\Filesystem\FilesystemManager"
      [1]=>
      string(39) "Illuminate\Contracts\Filesystem\Factory"
    }
    ["filesystem.disk"]=>
    array(1) {
      [0]=>
      string(42) "Illuminate\Contracts\Filesystem\Filesystem"
    }
    ["filesystem.cloud"]=>
    array(1) {
      [0]=>
      string(37) "Illuminate\Contracts\Filesystem\Cloud"
    }
    ["hash"]=>
    array(1) {
      [0]=>
      string(30) "Illuminate\Hashing\HashManager"
    }
    ["hash.driver"]=>
    array(1) {
      [0]=>
      string(35) "Illuminate\Contracts\Hashing\Hasher"
    }
    ["translator"]=>
    array(2) {
      [0]=>
      string(33) "Illuminate\Translation\Translator"
      [1]=>
      string(43) "Illuminate\Contracts\Translation\Translator"
    }
    ["log"]=>
    array(2) {
      [0]=>
      string(25) "Illuminate\Log\LogManager"
      [1]=>
      string(23) "Psr\Log\LoggerInterface"
    }
    ["mail.manager"]=>
    array(2) {
      [0]=>
      string(27) "Illuminate\Mail\MailManager"
      [1]=>
      string(33) "Illuminate\Contracts\Mail\Factory"
    }
    ["mailer"]=>
    array(3) {
      [0]=>
      string(22) "Illuminate\Mail\Mailer"
      [1]=>
      string(32) "Illuminate\Contracts\Mail\Mailer"
      [2]=>
      string(35) "Illuminate\Contracts\Mail\MailQueue"
    }
    ["auth.password"]=>
    array(2) {
      [0]=>
      string(47) "Illuminate\Auth\Passwords\PasswordBrokerManager"
      [1]=>
      string(47) "Illuminate\Contracts\Auth\PasswordBrokerFactory"
    }
    ["auth.password.broker"]=>
    array(2) {
      [0]=>
      string(40) "Illuminate\Auth\Passwords\PasswordBroker"
      [1]=>
      string(40) "Illuminate\Contracts\Auth\PasswordBroker"
    }
    ["queue"]=>
    array(3) {
      [0]=>
      string(29) "Illuminate\Queue\QueueManager"
      [1]=>
      string(34) "Illuminate\Contracts\Queue\Factory"
      [2]=>
      string(34) "Illuminate\Contracts\Queue\Monitor"
    }
    ["queue.connection"]=>
    array(1) {
      [0]=>
      string(32) "Illuminate\Contracts\Queue\Queue"
    }
    ["queue.failer"]=>
    array(1) {
      [0]=>
      string(50) "Illuminate\Queue\Failed\FailedJobProviderInterface"
    }
    ["redirect"]=>
    array(1) {
      [0]=>
      string(29) "Illuminate\Routing\Redirector"
    }
    ["redis"]=>
    array(2) {
      [0]=>
      string(29) "Illuminate\Redis\RedisManager"
      [1]=>
      string(34) "Illuminate\Contracts\Redis\Factory"
    }
    ["redis.connection"]=>
    array(2) {
      [0]=>
      string(39) "Illuminate\Redis\Connections\Connection"
      [1]=>
      string(37) "Illuminate\Contracts\Redis\Connection"
    }
    ["request"]=>
    array(2) {
      [0]=>
      string(23) "Illuminate\Http\Request"
      [1]=>
      string(40) "Symfony\Component\HttpFoundation\Request"
    }
    ["router"]=>
    array(3) {
      [0]=>
      string(25) "Illuminate\Routing\Router"
      [1]=>
      string(38) "Illuminate\Contracts\Routing\Registrar"
      [2]=>
      string(45) "Illuminate\Contracts\Routing\BindingRegistrar"
    }
    ["session"]=>
    array(1) {
      [0]=>
      string(33) "Illuminate\Session\SessionManager"
    }
    ["session.store"]=>
    array(2) {
      [0]=>
      string(24) "Illuminate\Session\Store"
      [1]=>
      string(36) "Illuminate\Contracts\Session\Session"
    }
    ["url"]=>
    array(2) {
      [0]=>
      string(31) "Illuminate\Routing\UrlGenerator"
      [1]=>
      string(41) "Illuminate\Contracts\Routing\UrlGenerator"
    }
    ["validator"]=>
    array(2) {
      [0]=>
      string(29) "Illuminate\Validation\Factory"
      [1]=>
      string(39) "Illuminate\Contracts\Validation\Factory"
    }
    ["view"]=>
    array(2) {
      [0]=>
      string(23) "Illuminate\View\Factory"
      [1]=>
      string(33) "Illuminate\Contracts\View\Factory"
    }
  }
  ["extenders":protected]=>
  array(1) {
    ["url"]=>
    array(1) {
      [0]=>
      object(Closure)#13 (2) {
        ["this"]=>
        object(Illuminate\Routing\RoutingServiceProvider)#10 (1) {
          ["app":protected]=>
          *RECURSION*
        }
        ["parameter"]=>
        array(2) {
          ["$url"]=>
          string(10) "<required>"
          ["$app"]=>
          string(10) "<required>"
        }
      }
    }
  }
  ["tags":protected]=>
  array(0) {
  }
  ["buildStack":protected]=>
  array(0) {
  }
  ["with":protected]=>
  array(0) {
  }
  ["contextual"]=>
  array(0) {
  }
  ["reboundCallbacks":protected]=>
  array(0) {
  }
  ["globalResolvingCallbacks":protected]=>
  array(0) {
  }
  ["globalAfterResolvingCallbacks":protected]=>
  array(0) {
  }
  ["resolvingCallbacks":protected]=>
  array(0) {
  }
  ["afterResolvingCallbacks":protected]=>
  array(0) {
  }
}
 */