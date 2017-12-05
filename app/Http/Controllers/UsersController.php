<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    function index()
    {
        return DB::table('users as u')
            ->join('post as p', 'p.author', '=', 'u.id')
            ->select('u.name', 'u.email', 'p.title', 'p.content')
            ->toSql();
    }
}
