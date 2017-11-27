<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Helper\SocialHelper;

class HomeController extends Controller
{
    function home(Request $request, $id = false)
    {

        $data = [[
            'name' => 'demo',
            'age'  => 13
        ],
            [
                'name' => 'demo',
                'age'  => 13
            ]
        ];

        return view('home', compact('data'))
            ->withTitle('Home page');
    }
}
