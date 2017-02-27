<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    public function handle(Request $request, $foo) {

        return view('example', ['foo' => $foo, 'items' => [1,2,3]]);
    }
}
