<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Detail;

class DetailController extends Controller
{
    public function show($id) {
        $details = Detail::where('effector_id', $id)->get();
        // dd($details);
        return view('detail_show', compact('details'));
    }
}
