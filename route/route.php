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
//Route::rule('user/:id','api/User/read');

//Route::get('think', function () {
//    return 'hello,ThinkPHP5!';
//});

//Route::get('hello/[:name]', 'index/hello');

//return [

//];



Route::get(':version.user/read','api/:version.User/read');
Route::post('test/:id','api/test/update');
Route::delete('test/:id','api/test/delete');
Route::put('test','api/test/save');



