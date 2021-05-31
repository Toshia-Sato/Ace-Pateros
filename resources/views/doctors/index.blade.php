@extends('layouts.admin')

@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('doctors.create') }}" title="Create a doctor" target="__blank"> <i class="fas fa-plus-circle"></i>
                    </a>
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
            
            <th>Name</th>
            <th>Service Type</th>
            <th>Specialization</th>
            <th>Category</th>
            <th>Room</th>
            <th>Schedule</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($doctors as $doctor)
            <tr>
                
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->service->service_type }}</td>
                <td>{{ $doctor->specialization->specialization }}</td>
                <td>{{ $doctor->category}}</td>
                <td>{{ $doctor->room }}</td>
                <td>{{ $doctor->schedule}}</td>
                
                <td>
                    <form action="{{ route('doctors.destroy', $doctor->id) }}" method="POST">

                        <a href="{{ route('doctors.show', $doctor->id) }}" title="show">
                            <i class="fas fa-eye text-success  fa-lg"></i>
                        </a>

                        <a href="doctors/{{$doctor->id}}/edit">
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

    {!! $doctors->links() !!}

@endsection