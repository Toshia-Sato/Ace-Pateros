@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Service's Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('careers.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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

    <form action="/hmo/{{$hmo->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

        <input type="hidden" name="id" value="{{$careers->id}}">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <br>
                    <input type="text" name="name" class="form-control" value="{{$careers->name}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="image" class="pr-2">Post Image</label>
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

