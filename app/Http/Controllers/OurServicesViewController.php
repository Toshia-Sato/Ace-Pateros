<?php

namespace App\Http\Controllers;
use App\Models\Service;


class OurServicesViewController extends Controller
{

    public function index()
    {   
        $url = request()->path();
        // dd($url);

        $count = Service::count();

        switch ($url) {
            case "ps":
                $link = 1;
                $cap = "Promo Packages";
              break;
            case "services/ancillary-services":
                $link = 2;
                $cap = "Ancillary Services";
              break;
            case "services/nursing-services":
                $link = 3;
                $cap = "Nursing Services";
              break;
          }

        $service = service::where('category', $link)->latest()->paginate(20);
        return view('physicians.dental', compact('service' ,'cap','count'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

}
