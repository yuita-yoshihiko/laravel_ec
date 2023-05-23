<?php

namespace App\Http\Controllers;

use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;

class ComponentTestController extends Controller
{
    public function showComponent1()
    {
        $message = 'メッセージ';
        return view('tests.component-test1',
        compact('message'));
    }

    public function showComponent2()
    {
        return view('tests.component-test2');
    }
}
