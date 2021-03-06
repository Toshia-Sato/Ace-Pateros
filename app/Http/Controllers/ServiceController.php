<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\service;
use Intervention\Image\Facades\Image;

class serviceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $service = service::latest()->paginate(10);;

        // dd($service);
        return view('service.index', compact('service'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $service = 'service';
        return view('service.create', compact('service'));
    }

   
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'category' => 'required',
            'image' => ['image']
            ]);

            if(request()->has('image')) {
                $imagePath = request('image')->store('uploads','public');
                $image = Image::make(public_path("storage/{$imagePath}"))->resize(720,720);
                $image->save();
            } else {
                $imagePath = 'uploads/default.png';
            }
    
            service::create([
                'name'=> $data['name'],
                'category'=> $data['category'],
                'image'=> $imagePath
            ]);

        return redirect()->route('service.index')
            ->with('success', 'Doctor Added Successfully.');
    }

   
    public function edit($id)
    {   
       $service = service::find($id);
        
       return view('service.edit', compact('service', 'id'));
    }
    

    public function update(service $service)
    {
        $data = request()->validate([
            'name' => 'required',
            'category' => 'required'
            ]);
    
            $service->update($data);
    
        return redirect('service') -> with('success', 'Doctor updated successfully');
    }

    public function destroy(service $service)
    {
        $service->delete();

        return redirect()->route('service.index')
            ->with('success', 'Doctor deleted successfully');
    }
}
