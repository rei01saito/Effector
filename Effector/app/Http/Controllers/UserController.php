<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function show($id) 
    {
        $user = User::find($id);
        return view('users/show', ['user' => $user]);
    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('users/edit', ['user' => $user]);
    }
}
