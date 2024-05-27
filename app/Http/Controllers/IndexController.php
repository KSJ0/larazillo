<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function PHPUnit\Framework\returnCallback;

class IndexController extends Controller
{
    public function index() {
        return inertia('Index/Index',
        [
            'message' => "Hello from Laravel!"  
        ]
    );
    }
    public function show() {
        return inertia('Index/Show');
    }
}
