<?php

namespace App\Http\Controllers;
use App\Models\Doctor;


class PhysicianViewController extends Controller
{

    public function index()
    {   
        $url = request()->path();
        // dd($url);

        switch ($url) {
            case "physicians/dental":
                $link = 2;
              break;
            case "physicians/ent":
                $link = 3;
              break;
            case "physicians/internal-medicine":
                $link = 4;
              break;
            case "physicians/ophthalmology":
                $link = 5;
              break;
            case "physicians/pediatric":
                $link = 6;
              break;
            case "physicians/surgery-doctors":
                $link = 7;
              break;
              
          }

        $doctors = Doctor::where('specialization_id', $link)->latest()->paginate(20);
        return view('physicians.dental', compact('doctors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
