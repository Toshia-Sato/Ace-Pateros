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
                $link = 1;
                $cap = "Dental";
              break;
            case "physicians/ent":
                $link = 2;
                $cap = "ENT";
              break;
            case "physicians/internal-medicine":
                $link = 3;
                $cap = "Internal Medicine";
              break;
            case "physicians/ophthalmology":
                $link = 4;
                $cap = "Ophthalmology";
              break;
            case "physicians/pediatric":
                $link = 5;
                $cap = "Pediatric";
              break;
            case "physicians/surgery-doctors":
                $link = 6;
                $cap = "Surgery Doctors";
              break;
              
          }

        $doctors = Doctor::where('specialization_id', $link)->orderby('name')->paginate(20);
        $count = $doctors->count();
        return view('physicians.dental', compact('doctors' ,'cap','count'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
