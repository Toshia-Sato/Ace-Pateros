<?php


namespace App\Http\Controllers;
use App\Models\HMO;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class HmoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        $hmo = HMO::latest()->paginate(10);

        // dd($hmo);
        return view('hmo.index', compact('hmo'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $hmo = 'hmo';

        return view('hmo.create', compact('hmo'));
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

        HMO::create([
            'name'=> $data['name'],
            'url'=> $data['url'],
            'image'=> $imagePath
        ]);

        return redirect()->route('hmo.index')
            ->with('success', 'Doctor Added Successfully.');
    }

   
    public function edit($id)
    {   
       $hmo = hmo::find($id);
        
       return view('hmo.edit', compact('hmo', 'id'));
    }
    

    public function update(hmo $hmo)
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

            $hmo->update($data);
    
        return redirect('hmo') -> with('success', 'Doctor updated successfully');
    }

    public function destroy(hmo $hmo)
    {
        $hmo->delete();

        return redirect()->route('hmo.index')
            ->with('success', 'Doctor deleted successfully');
    }
}
