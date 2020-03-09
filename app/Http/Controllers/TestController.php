<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class TestController extends Controller
{
    /**
     * redis
     */
    public function redis1()
    {
        $key = 'hello';
        $val = 'hi';
        Redis::set($key,$val);
        
        echo "set 成功";
    }
    public function redis2()
    {
        $key = 'hello';
        $val = Redis::get($key);

        echo "值  :".$val;
    }
}
