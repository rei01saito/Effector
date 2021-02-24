<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;
use App\Models\Effector;

class DetailController extends Controller
{
    public function show($id) 
    {
        $details = Detail::where('effector_id', $id)->get();
        // dd($details);
        return view('details.show', compact('details'));
    }
    public function create($id)
    {
        return view('details.create', compact('id'));
    }
    public function store(Request $request)
    {
        Detail::create(['type' => $request->type, 'memo' => $request->memo, 
            'brand' => $request->brand, 'price' => $request->price, 'effector_id' => $request->effector_id]);
        $id = $request->effector_id;
        $effector = Effector::find($id);
        $effector->detail_status = 1;
        $effector->save();
        return redirect()->action([DetailController::class, 'show'], compact('id'));
    }
}
