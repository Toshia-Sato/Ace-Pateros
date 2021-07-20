<title>Admin | HMO</title>


@extends('layouts.admin')

@section('content')
<br>
<div class="container">
    <div class="col-md-16">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>HMO</h2>
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
    <form action="{{ route('careers.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="image" class="pr-2">Job Title</label>
                    <input type="text" name="name" class="form-control"">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="url" class="pr-2">Link</label>
                    <input type="text" name="url" class="form-control"">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                    <label for="image" class="pr-2">Job Photo</label>
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
            <th>Job Title</th>
            <th>Image</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($careers as $career)
            <tr>
                
                <td>{{ $career->id }}</td>
                <td>{{ $career->name }}</td>
                <td>
                <img src="/storage/{{ $career->image}}" alt="" class="img-thumbnail" style="width: 100px;">
                </td>

                <td>
                    <form action="{{ route('careers.destroy', $career->id) }}" method="POST">

                        <a href="hmo/{{$career->id}}/edit">
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

    <div class="container">{{ $careers->links() }}</div>

@endsection
</div>
