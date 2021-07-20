@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Career's Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('schedule.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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

    <form action="/schedule/{{$schedule->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

        <input type="hidden" name="id" value="{{$schedule->id}}">
        <div class="row">
            <<div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <br>
                    <label for="jobtitle" class="pr-2">Jobtitle</label>
                    <input type="text" name="jobtitle" class="form-control" value="{{$schedule->jobtitle}}">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="image" class="pr-2">Description</label>    
            <div class="form-group">
                    <textarea name="description" class="col-md-12" rows="10">{{$schedule->description}}</textarea>
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
                <button type="submit" class="btn btn-warning">Save Edit</button>
            </div>
        </div>

    </form>
@endsection

