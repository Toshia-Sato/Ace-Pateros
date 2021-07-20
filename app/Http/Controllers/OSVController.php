<?php

namespace App\Http\Controllers;
use App\Models\Service;
use Illuminate\Http\Request;

class OSVController extends Controller
{
    public function index()
    {   
        $url = request()->path();
        // dd($url);

        $count = Service::count();

        switch ($url) {
            case "services/promo-packages":
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
        $count = $service->count();
        return view('services.promo-packages', compact('service' ,'cap','count'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
