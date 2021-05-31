@extends('layouts.admin')


@section('content')
    <div class="row">
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
                    <strong>Name:</strong>
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
                <label for="cars">Choose Service:</label>
                <select name="service_id" class="form-control" style="height:50px" id="service_id">
                @foreach ($service as $services)
                <option value="{{$services->id}}" {{$services->id == $doctors->service_id ? 'selected' :''}}>{{$services->service_type}}</option>
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
                    <strong>Room:</strong>
                    <input type="text" name="room" class="form-control" value="{{ $doctors->room }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Schedule:</strong>
                    <input type="te" name="schedule" class="form-control" value="{{ $doctors->schedule }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection

