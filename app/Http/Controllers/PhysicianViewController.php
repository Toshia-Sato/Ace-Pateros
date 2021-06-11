<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\Specialization;
use Illuminate\Support\Facades\DB;

class PhysicianViewController extends Controller
{

    public function dental()
    {   
        $doctors = Doctor::where('specialization_id', 2)->latest()->paginate(20);
        return view('physicians.dental', compact('doctors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function ent()
    {   
        $doctors = Doctor::where('specialization_id', 3)->latest()->paginate(20);
        return view('physicians.ent', compact('doctors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function im()
    {   
        $doctors = Doctor::where('specialization_id', 4)->latest()->paginate(20);
        return view('physicians.internal-medicine', compact('doctors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function ophthalmology()
    {   
        $doctors = Doctor::where('specialization_id', 5)->latest()->paginate(20);
        return view('physicians.ophthalmology', compact('doctors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function pediatric()
    {   
        $doctors = Doctor::where('specialization_id', 6)->latest()->paginate(20);
        return view('physicians.pediatric', compact('doctors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function surgery()
    {   
        $doctors = Doctor::where('specialization_id', 7)->latest()->paginate(20);
        return view('physicians.surgery-doctors', compact('doctors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
