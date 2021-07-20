<?php

namespace App\Http\Controllers;
use App\Models\Schedule;
use Illuminate\Http\Request;

class CareerViewController extends Controller
{
    public function index()
    {   
        $careers = Schedule::orderby('jobtitle')->paginate(10);
        $count = Schedule::count();

        // dd($hmo);
        return view('careers', compact('careers','count'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
