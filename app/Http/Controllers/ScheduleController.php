<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use Intervention\Image\Facades\Image;


class ScheduleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        
        $schedule = Schedule::latest()->paginate(10);
    
        return view('schedule.index', compact('schedule'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $schedule = 'schedule';
        return view('schedule.create', compact('schedule'));
    }

   
    public function store()
    {
        $data = request()->validate([
            'jobtitle' => 'required',
            'description' => 'required',
            'image' => ['image']   
        ]);

        if(request()->has('image')) {
            $imagePath = request('image')->store('uploads','public');
            $image = Image::make(public_path("storage/{$imagePath}"))->resize(720,720);
            $image->save();
        } else {
            $imagePath = 'uploads/default.png';
        }

        Schedule::create([
            'jobtitle'=> $data['jobtitle'],
            'description'=> $data['description'],
            'image'=> $imagePath
        ]);

        return redirect()->route('schedule.index')
            ->with('success', 'Schedule Added Successfully.');
    }

   
    public function edit($id)
    {   
       $schedule = Schedule::find($id);
        
       return view('schedule.edit', compact('schedule', 'id'));
    }
    

    public function update(schedule $schedule)
    {
        $data = request()->validate([
            'jobtitle' => 'required',
            'description' => 'required',
            'image' => ['image'] 
            ]);

            if(request()->has('image')) {
                $imagePath = request('image')->store('uploads','public');
                $image = Image::make(public_path("storage/{$imagePath}"))->resize(720,720);
                $image->save();
            } else {
                $imagePath = 'uploads/default.png';
            }

            $data['image'] = $imagePath;

            $schedule->update($data);
    
        return redirect('schedule') -> with('success', 'Doctor updated successfully');
    }

    public function destroy(schedule $schedule)
    {
        $schedule->delete();

        return redirect()->route('schedule.index')
            ->with('success', 'Doctor deleted successfully');
    }
}
