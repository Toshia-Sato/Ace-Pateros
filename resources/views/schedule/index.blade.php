<title>Careers | Admin</title>


@extends('layouts.admin')

@section('content')
<br>
<div class="container">
    <div class="flex-column">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD for Careers</h2>
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
    <form action="{{ route('schedule.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <br>
                    <label for="jobtitle" class="pr-2">Job Title</label>
                    <input type="text" name="jobtitle" class="form-control"">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="description" class="pr-2">Job Description</label>
                    <textarea name="description" cols="100" rows="10"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="image" class="pr-2">Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">
            </div>

            @error('image')
                    <strong>{{ $message }}</strong>
            @enderror

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>

    </form>

<br>


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
            <th>Jobtitle</th>
            <th>Description</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($schedule as $schedules)
            <tr>
                
                <td>{{ $schedules->id }}</td>
                <td>{{ $schedules->jobtitle }}</td>
                <td>{{ $schedules->description }}</td>
                <td>
                <img src="/storage/{{ $schedules->image}}" alt="" class="img-thumbnail" style="width: 100px;">
                </td>

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
    </div>
</div>

 

<div class="container">{{ $schedule->links() }}</div>

@endsection