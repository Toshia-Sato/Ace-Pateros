<title>Specialization Categories</title>


@extends('layouts.admin')

@section('content')
<br>
<div class="container">
    <div class="flex-column">
        
    <div class="row justify-content-md-center">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Add Specializations</h2>
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
    <form action="{{ route('specializations.store') }}" method="POST" >
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <br>
                    <input type="text" name="specialization" class="form-control" >
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Add</button>
            </div>
        </div>

    </form>




<div class="row justify-content-md-center">
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
            <th>Specialization</th>
            <th width="280px">Action</th>
        </tr>

        @foreach ($specialization as $specializations)
            <tr>
                
                <td>{{ $specializations->id }}</td>
                <td>{{ $specializations->specialization }}</td>

                <td>
                    <form action="{{ route('specializations.destroy', $specializations->id) }}" method="POST">

                        <a href="specializations/{{$specializations->id}}/edit">
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

 

<div class="container">{{ $specialization->links() }}</div>

@endsection