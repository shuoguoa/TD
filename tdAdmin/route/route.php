<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

Route::get('think', function () {
    return 'hello,ThinkPHP5!';
});

Route::rule('hello/:name', 'admin/test/hello');

Route::post('users/hello', 'admin/users/hello');

Route::get('index', 'admin/users/index');

Route::post('update', 'admin/users/update');

//Route::group('admin/users', function () {
//    Route::post('1', 'users/index');
//    Route::post('2', 'users/read');
//    Route::delete('3', 'users/deletes');
//});

//Route::miss('admin/base/miss');

