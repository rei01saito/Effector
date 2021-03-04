<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Effector;
use Intervention\Image\ImageManagerStatic as Image;

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

        //Validation
        $validateData = $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,png,jpg,webp|max:2048',// dimensions:width=320,height=240,
        ]);

        if($request->hasFile('image')) {
            // $request->file('image')->store('/public/images');
            try {
                $file = $request->file('image');
                $img = Image::make($file);
                $img->resize(300, null, function ($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save($file);
                $file->store('public/images');
            } catch(Exception $e) {
                echo '補足した例外: ', $e->getMessage(), "\n";
            }

            $data = ['user_id'=>\Auth::id(), 'name'=>$post['name'],
            'image'=>$request->file('image')->hashName()];
        } else {
            $data = ['user_id'=>\Auth::id(), 'name'=>$post['name']];
        }
        Effector::insert($data);
        return redirect('/');
    }

    public function show(Effector $effector) {
        $test = $effector->name;
        return($test);
    }
}
