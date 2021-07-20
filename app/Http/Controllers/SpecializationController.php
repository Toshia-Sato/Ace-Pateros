<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Specialization;

class SpecializationController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $specialization = Specialization::latest()->paginate(10);;

        // dd($specialization);
        return view('specializations.index', compact('specialization'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $specialization = 'specialization';

        return view('specializations.create', compact('specialization'));
    }

   
    public function store(Request $request)
    {
        $data = request()->validate([
            'specialization' => 'required'
            ]);

        Specialization::create($request->all());

        return redirect()->route('specializations.index')
            ->with('success', 'Doctor Added Successfully.');
    }

   
    public function edit($id)
    {   
       $specialization = Specialization::find($id);
        
       return view('specializations.edit', compact('specialization', 'id'));
    }
    

    public function update(Specialization $specialization)
    {
        
       
        $data = request()->validate([
            'specialization' => 'required'
            ]);
    
            $specialization->update($data);
    
        return redirect('specializations') -> with('success', 'Doctor updated successfully');
    }

    public function destroy(Specialization $specialization)
    {
        $specialization->delete();

        return redirect()->route('specializations.index')
            ->with('success', 'Doctor deleted successfully');
    }
}
