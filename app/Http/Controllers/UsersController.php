<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('pages/infos');
    }

    public function store(Request $request)
    {
        return 'le nom est ' .$request->input('nom');
    }
}
