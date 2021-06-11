<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Doctor;
use App\Models\Day;


class ScheduleController extends Controller
{
    public function index()
    {
        
        $schedule = Schedule::latest()->paginate(10);
        $day = Day::all();
        $doctor = Doctor::all();
        // dd($doctor);
        

        // dd($doctor);
        return view('schedule.index', compact('schedule','day','doctor'))
        ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        $day = 'day';
        $schedule = 'schedule';
        $doctor = 'doctors';
        return view('schedule.create', compact('schedule','day','doctor'));
    }

   
    public function store()
    {
        $data = request()->validate([
            'day_id'=> 'required',
            'doctors_id' => 'required',
            'time' => 'required'
            ]);

        Schedule::create($data);

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
            'day_id'=> 'required',
            'doctors_id' => 'required',
            'time' => 'required'
            ]);
    
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
