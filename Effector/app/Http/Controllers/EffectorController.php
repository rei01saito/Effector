<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Effector;

class EffectorController extends Controller
{
    //
    public function index()
    {
        $effectors = Effector::where('status', 1)->orderBy('created_at', 'DESC')->get();
        // dd($effectors); //デバッグ用
        return view('effectors/index', compact('effectors'));
    }
    public function create()
    {
        return view('effectors/create');
    }
    public function store(Request $request)
    {
        $post = $request->all();

        $validateData = $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,png,jpg|max:2048',
        ]);

        if($request->hasFile('image')) {
            $request->file('image')->store('/public/images');
            $data = ['user_id'=>\Auth::id(), 'name'=>$post['name'],
            'image'=>$request->file('image')->hashName()];
        } else {
            $data = ['user_id'=>\Auth::id(), 'name'=>$post['name']];
        }
        Effector::insert($data);
        return redirect('/');
    }
}
