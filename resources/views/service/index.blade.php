<title>Service Categories</title>


@extends('layouts.admin')

@section('content')
<br>
<div class="container">
    <div class="flex-column">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Services</h2>
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
    <form action="{{ route('service.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <br>
                    <label for="category">Promos and Services:</label>
                    <input type="text" name="name" class="form-control" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <label for="category">Category:</label>
                <select name="category" class="form-control" style="height:50px" id="category" >                
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
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>

    </form>




<div class="row">
        <div class="col-lg-12">
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
            <th>Name</th>
            <th>Category</th>
            <th>Image</th>
            <th>Action</th>
        </tr>

        @foreach ($service as $services)
            <tr>
                
                <td>{{ $services->id }}</td>
                <td>{{ $services->name }}</td>
                <td>{{ $services->category }}</td>
                <td>{{ $services->image }}</td>

                <td>
                    <form action="{{ route('service.destroy', $services->id) }}" method="POST" style="width:280px;">

                        <a href="service/{{$services->id}}/edit">
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

 

<div class="container">{{ $service->links() }}</div>

@endsection