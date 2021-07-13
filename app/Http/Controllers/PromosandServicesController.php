<?php

namespace App\Http\Controllers;

use App\Models\PromosandServices;
use Illuminate\Http\Request;

class PromosandServicesController extends Controller
{
    public function index()
    {   
        $pns = PromosandServices::latest()->paginate(10);;

        // dd($service);
        return view('promosandservices.index', compact('pns'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $pns = 'promos';
        return view('promosandservices.create', compact('pns'));
    }

   
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required'
            ]);

            promosandservices::create($request->all());

        return redirect()->route('promosandservices.index')
            ->with('success', 'Doctor Added Successfully.');
    }

   
    public function edit($id)
    {   
       $pns = promosandservices::find($id);
        
       return view('service.edit', compact('pns', 'id'));
    }
    

    public function update(promosandservices $pns)
    {
        $data = request()->validate([
            'name' => 'required'
            ]);
    
            $pns->update($data);
    
        return redirect('promos') -> with('success', 'Doctor updated successfully');
    }

    public function destroy(promosandservices $pns)
    {
        // dd($pns);
        $pns->delete();

        return redirect()->route('promosandservices.index')
            ->with('success', 'Doctor deleted successfully');
    }
}
