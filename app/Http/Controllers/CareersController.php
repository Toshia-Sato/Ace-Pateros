<?php

namespace App\Http\Controllers;
use App\Models\Careers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class CareersController extends Controller
{
    public function index()
    {   
        $careers = Careers::latest()->paginate(10);

        // dd($hmo);
        return view('careers.index', compact('careers'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $careers = 'careers';

        return view('careers.create', compact('careers'));
    }  

   
    public function store(Request $request)
    {
        $data = request()->validate([
            'name' => 'required',
            'url' => 'required',
            'image' => ['image']   
        ]);

        if(request()->has('image')) {
            $imagePath = request('image')->store('uploads','public');
            $image = Image::make(public_path("storage/{$imagePath}"))->resize(720,720);
            $image->save();
        } else {
            $imagePath = 'uploads/default.png';
        }

        Careers::create([
            'name'=> $data['name'],
            'url'=> $data['url'],
            'image'=> $imagePath
        ]);

        return redirect()->route('careers.index')
            ->with('success', 'Doctor Added Successfully.');
    }

   
    public function edit($id)
    {   
       $careers = careers::find($id);
        
       return view('careers.edit', compact('careers', 'id'));
    }
    

    public function update(careers $careers)
    {
        
       
        $data = request()->validate([
            'name' => 'required',
            'image' => 'required'
            ]);

            if(request()->has('image')) {
                $imagePath = request('image')->store('uploads','public');
                $image = Image::make(public_path("storage/{$imagePath}"))->resize(720,720);
                $image->save();
            } else {
                $imagePath = 'uploads/default.png';
            }

            $data['image'] = $imagePath;

            $careers->update($data);
    
        return redirect('careers') -> with('success', 'Doctor updated successfully');
    }

    public function destroy(careers $careers)
    {
        $careers->delete();

        return redirect()->route('careers.index')
            ->with('success', 'Doctor deleted successfully');
    }
}
