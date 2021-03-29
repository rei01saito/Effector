<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Effector;
use Intervention\Image\ImageManagerStatic as Image;

class EffectorController extends Controller
{
    //
    public function index()
    {
        $id = Auth::id();
        $effectors = Effector::where('user_id', $id)->where('status', 1)->orderBy('created_at', 'DESC')->get();
        $latest = Effector::where('status', 1)->orderBy('created_at', 'DESC')->first();
        // dd($effectors); //デバッグ用
        return view('effectors/index', compact('effectors', 'latest'));
    }

    public function create()
    {
        return view('effectors/create');
    }

    public function store(Request $request)
    {
        $post = $request->all();

        //Validation
        $validateData = $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,png,jpg,webp|max:2048',// dimensions:width=320,height=240,
        ]);

        if($request->hasFile('image')) {
            $file = $request->file('image');
            $img = Image::make($file);
            $img->resize(200, null, function ($constraint) {
                $constraint->aspectRatio();
            });
            $img->save($file);
            // dd($file);
            $path = Storage::disk('s3')->putFile('', $file, 'public'); // S3に保存
            // dd($path);
            //  $file->store('public/images'); 本来はこれ。今回はストレージにs3を使うので変える。

            $data = ['user_id'=>\Auth::id(), 'name'=>$post['name'],
            'image'=> Storage::disk('s3')->url($path)]; // S3へのパスを保存
        } else {
            $data = ['user_id'=>\Auth::id(), 'name'=>$post['name']];
        }
        Effector::insert($data);
        return redirect('/')->with('flash_message', '投稿が完了しました');
    }

    public function show(Effector $effector) {
        $test = $effector->name;
        return($test);
    }

    public function sample() {
        return view('effectors/sample');
    }
}
