@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add New Doctors</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('doctors.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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
<div class="container">
<form action="{{ route('doctors.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="cars">Choose Specialization:</label>
               
                <select name="specialization_id" class="form-control" style="height:50px" id="specialization_id" >
                @foreach ($specializations as $specialization)
                <option value="{{$specialization->id}}">{{$specialization->specialization}}</option>
                @endforeach
                </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="cars">Category:</label>
                <select name="category" class="form-control" style="height:50px" id="category" >                
                <option value="Regular Consultant">Regular Consultant</option>
                <option value="Visiting Consultant">Visiting Consultant</option>
                </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="cars">Schedule:</label>
                    <input type="text" name="schedule" class="form-control" >
                </div>
            </div>

            <div class="row col-xs-12 col-sm-12 col-md-12 text-center container">
                    <label for="image" class="pr-2">Post Image</label>
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
