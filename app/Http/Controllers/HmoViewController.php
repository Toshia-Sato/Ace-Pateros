<?php

namespace App\Http\Controllers;
use App\Models\HMO;

use Illuminate\Http\Request;

class HmoViewController extends Controller
{
    public function index()
    {   
        $hmo = HMO::orderby('name')->paginate(10);
        $count = HMO::count();

        // dd($hmo);
        return view('accredited-hmos', compact('hmo','count'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
