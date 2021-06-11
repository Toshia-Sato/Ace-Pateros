@extends('layouts.admin')
@livewireStyles
<title>Doctor's Section</title>
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

    <div class="card-body">
            @livewire('search')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    @livewireScripts

    {!! $doctors->links() !!}

@endsection