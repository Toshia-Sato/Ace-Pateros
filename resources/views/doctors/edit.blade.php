@extends('layouts.admin')


@section('content')
    <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Doctor's Details</h2>
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
    </div>
    <form action="/doctors/{{$doctors->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

        <input type="hidden" name="id" value="{{$doctors->id}}">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="name" class="pr-2">Name</label>
                    <input type="text" name="name" class="form-control" value="{{ $doctors->name }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="cars">Choose Specialization:</label>
               
                <select name="specialization_id" class="form-control" style="height:50px" id="specialization_id" value="{{ $doctors->specialization_id }}">
                @foreach ($specializations as $specialization)
                <option value="{{$specialization->id}}" {{$specialization->id == $doctors->specialization_id ? 'selected' :''}}>{{$specialization->specialization}}</option>
                @endforeach
                </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="category">Category:</label>
                <select name="category" class="form-control" style="height:50px" id="category" value="{{$doctors->category}}">                
                <option value="Regular Consultant">Regular Consultant</option>
                <option value="Visiting Consultant">Visiting Consultant</option>
                </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="schedule" class="pr-2">Schedule</label>
                    <input type="text" name="schedule" class="form-control" value="{{ $doctors->schedule }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="image" class="pr-2">Profile Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">
            </div>

            @error('image')
                    <strong>{{ $message }}</strong>
            @enderror
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>

    </div>
@endsection

