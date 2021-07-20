@extends('layouts.admin')


@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Service's Details</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('service.index') }}" title="Go back"> <i class="fas fa-backward "></i> </a>
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

    <form action="/service/{{$service->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PATCH')

    <div class="row">
            <div class="col-md-12">

                <div class="form-group">
                    <br>
                    <label for="category">Promos and Services:</label>
                    <input 
                    type="text"
                    id="name"
                    class="form-control @error('name') is-invalid @enderror" 
                    name="name" 
                    value="{{ old('name') ?? $service->name }}"
                    autocomplete="name" autofocus>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="category">Category:</label>
                <select name="category" class="form-control" style="height:50px" id="category" value="{{$service->category}}">                
                <option value="1">Promo Packages</option>
                <option value="2">Ancillary Services</option>
                <option value="3">Nursing Services</option>
                </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="image" class="pr-2">Post Image</label>
                    <input type="file" name="image" id="image" class="form-control-file">
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-warning">Save Edit</button>
            </div>
        </div>

    </form>
@endsection

