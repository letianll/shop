<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**默认情况下，AppServiceProvider 是空的，这里是添加自定义启动和服务容器绑定的最佳位置，当然，对大型应用，你可能希望创建多个服务提供者，每一个都有着更加细粒度的启动。
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**如果我们想要在服务提供者中注册视图 Composer 该怎么做？
     * 这就要用到 boot 方法了。该方法在所有服务提供者被注册以后才会被调用，这就是说我们可以在其中访问框架已注册的所有其它服务
     *
     * 们可以在 boot 方法中对依赖进行类型提示，服务容器会自动注入你所需要的依赖：
     *
     * public function boot(ResponseFactory $response){
            $response->macro('caps', function ($value) {
            //
            });
        }
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
