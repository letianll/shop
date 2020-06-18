<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *从 CSRF 验证中排除的 URL
     * @var array
     *
     * VerifyCsrfToken 中间件框架底层实现源码位于
     * vendor/laravel/framework/src/Illuminate/Foundation/Http/Middleware/VerifyCsrfToken.php
     */
    protected $except = [
        //
        'alipay/*',
    ];
}
