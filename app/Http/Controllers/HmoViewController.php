<?php

namespace App\Http\Controllers;
use App\Models\HMO;

use Illuminate\Http\Request;

class HmoViewController extends Controller
{
    public function index()
    {   
        $hmo = HMO::orderby('name')->paginate(10);

        // dd($hmo);
        return view('accredited-hmos', compact('hmo'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
