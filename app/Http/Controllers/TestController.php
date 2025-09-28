<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    function index()
    {
        $name = "name";
        $test = "test";
        return view('test.test', compact('name', 'test'));
    }
}
