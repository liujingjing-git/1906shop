<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    /**
     * redis
     */
    public function redis1()
    {
        echo 111;
    }
    public function redis2()
    {
        echo 222;
    }
}
