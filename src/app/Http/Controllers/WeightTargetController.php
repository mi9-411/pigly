<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WeightTarget;

class WeightTargetController extends Controller
{
    public function create(Request $request)
    {
        $target = $request->all();
        WeightTarget::create($target);

        return view('index');
    }

}
