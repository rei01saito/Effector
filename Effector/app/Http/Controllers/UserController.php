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
    public function update(Request $request) {
        $post = $request->all();

        $validateData = $request->validate([
            'image' => 'mimes:jpeg,png,jpg,webp|max:2048',
            'name' => 'required',
            'email' => 'required',
        ]);

        if($request->hasFile('image')) {
            $file = $post->file('image');
            $file->store('public/images');
            User::where('id', $post['id'])->update(['name'=>$post['name'], 'Email'=>$post['email'], 'image'=>$file->hashName()]);
        } else {
            User::where('id', $post['id'])->update(['name'=>$post['name'], 'Email'=>$post['email']]);
        }
        return redirect('/');
    }
}
