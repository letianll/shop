<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|web.php 文件包含的路由通过 RouteServiceProvider 引入，都被约束在 web 中间件组中，
因而支持 Session、CSRF 保护以及 Cookie 加密功能，如果应用无需提供无状态的、RESTful 风格的 API，
那么路由基本上都要定义在 web.php 文件中。
*/

Route::get('/', function () {
    return view('welcome');
});


//Admin 模块分组路由
Route::group(['namespace'=>'Admin'],function (){
    Route::get('admin/index','IndexController@index');
    Route::get('book/{id}/{name}','BookController@lists')->where(['name'=>'[a-z]+']);

});

Route::prefix('aaa')->group(function () {
    Route::get('users', function () {
        echo '123';
        // Matches The "/admin/users" URL
    });
});




Route::get('here', function () {
    echo 'here';
});

Route::get('where', function () {
    echo 'where';
});
//Route::redirect('/here', '/where');

//Route::get('posts/{post?}/comments/{comment}', function ( $name = null,$commentId) {
//    return  $name.'-' . $commentId;
//});
//
//Route::get('posts/{post}/comments/{comment}', function ( $name = 'aaaa',$commentId) {
//    return  $name.'-' . $commentId;
//});

Route::get('user/{id}/{name}', function ($id, $name) {
    // 同时指定 id 和 name 的数据格式
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

Route::get('user/profile', function () {
    // 通过路由名称生成 URL
    return 'my url: ' . route('profile');
})->name('profile');



Route::get('form_without_csrf_token', function (){
    return '<form method="POST" action="/hello_from_form"><button type="submit">提交</button></form>';
});

Route::get('form_with_csrf_token', function () {
    return '<form method="POST" action="/hello_from_form">' . csrf_field() . '<button type="submit">提交</button></form>';
});


Route::post('hello_from_form', function (){
    return 'hello laravel!';
});


Route::get('user/{id}', 'UserController@show');


//你可以通过传递数组到 resources 方法从而一次注册多个资源控制器：
Route::resource('posts', 'PostController');

Route::get('/', function () {
    return response()
        ->jsonp($request->input('callback'), ['name' => 'Abigail', 'state' => 'CA']);
});

Route::get('cookie/response', function () {
    return response('Hello World', 200)
        ->header('Content-Type', 'text/plain123');
});