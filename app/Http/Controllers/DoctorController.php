<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Service;
use App\Models\Specialization;
use DOTNET;

class DoctorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $doctors = Doctor::latest()->paginate(5);
        

        return view('doctors.index', compact('doctors'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create(Doctor $doctors, Specialization $specializations, Service $service)
    {   $specializations = Specialization::all();
        $service = Service::all();
        return view('doctors.create', compact('specializations','service'));
    }

   
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'service_id' => 'required',
            'specialization_id',
            'category',
            'room' ,
            'schedule_id'

            
        ]);

        Doctor::create($request->all());

        return redirect()->route('doctors.index')
            ->with('success', 'Doctor Added Successfully.');
    }

    
    public function show(Doctor $doctors)
    {
        return view('doctors.show', compact('doctors'));
    }

   
    public function edit($id,Specialization $specializations, Service $service)
    {  

        $doctors = Doctor::find($id);
        $specializations = Specialization::all();
        $service = Service::all();
        
      

       return view('doctors.edit', compact('doctors', 'id','specializations','service'));
    }
    

    public function update(Doctor $doctor)
    {
        $data = request()->validate([
            'name' => 'required',
            'service_id'=> 'required',
            'specialization_id'=> 'required',
            'category'=>'required',
            'room' ,
            'schedule_id'
            ]);
    
            $doctor->update($data);
    
        return redirect('doctors') -> with('success', 'Doctor updated successfully');
    }

    public function destroy(Doctor $doctor)
    {
        $doctor->delete();

        return redirect()->route('doctors.index')
            ->with('success', 'Doctor deleted successfully');
    }


}
