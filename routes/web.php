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
|
*/

Route::get('/leetcode',
    function () {
        $nums = [2, 7, 11, 15];
        $target = 9;
//        $flip_nums = array_flip($nums);
//        foreach ($nums as $key => $num) {
//            $diff = $target - $num;
//            if (isset($flip_nums[$diff]) && $flip_nums[$diff] != $key){
//                return [$flip_nums[$diff],$key];
//            }
//        }
        $found = [];
        foreach ($nums as $key=>$num){
            $diff = $target - $num;
            if (array_key_exists($diff,$found)){
                return [$key,$found[$diff]];
            }
            $found[$num] = $key;
        }

        throw new Exception('no solution');
    });
