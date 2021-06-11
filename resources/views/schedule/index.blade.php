<title>ScheduleCategories</title>


@extends('layouts.admin')

@section('content')
<br>
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Schedule Services</h2>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('schedule.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="doctors_id">Choose a Doctor:</label>
                <select name="doctors_id" class="form-control" style="height:50px" id="doctors_id" >
                    @foreach ($doctor as $doctors)
                    <option value="{{$doctors->id}}">{{$doctors->name}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="cars">Choose a Day:</label>
                <select name="day_id" class="form-control" style="height:50px" id="day_id" >
                    @foreach ($day as $days)
                    <option value="{{$days->id}}">{{$days->day}}</option>
                    @endforeach
                </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <br>
                    <input type="text" name="time" class="form-control"">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>

    </form>




<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            
            <th>ID</th>
            <th>Day-ID</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($schedule as $schedules)
            <tr>
                
                <td>{{ $schedules->id }}</td>
                <td>{{ $schedules->day_id }}</td>

                <td>
                    <form action="{{ route('schedule.destroy', $schedules->id) }}" method="POST">

                        <a href="schedule/{{$schedules->id}}/edit">
                            <i class="fas fa-edit  fa-lg"></i>

                        </a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>

                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
        
    </table>
    
    
</div>

 

<div class="container">{{ $schedule->links() }}</div>

@endsection