<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;

Route::get('test', 'api/test/index');
Route::put('test/:id', 'api/test/update');
Route::get('banner/:id', 'api/v1.Banner/getBanner');

Route::post('api/:version/token/user', 'api/:version.Token/getToken');


// Route::get('api/:version/product/recent', 'api/:version.product/getRecent');
//
// Route::get('api/:version/product/by_category', 'api/:version.product/getAllProductInCategory');
// Route::get('api/:version/product/:id', 'api/:version.product/getOne', [], ['id'=>'\d+']);

Route::group('api/:version/product', function () {
 Route::get('/recent', 'api/:version.product/getRecent');
 Route::get('/by_category', 'api/:version.product/getAllProductInCategory');
 Route::get('/:id', 'api/:version.product/getOne', [], ['id'=>'\d+']);
});

//Route::get('banner/create','api/v1.Banner/CreatedUser'))
// return [
//     '__pattern__' => [
//         'name' => '\w+',
//     ],
//     '[hello]'     => [
//         ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//         ':name' => ['index/hello', ['method' => 'post']],
//     ],
//
// ];
