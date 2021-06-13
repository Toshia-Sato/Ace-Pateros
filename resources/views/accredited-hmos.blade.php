@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row justify-content-md-center">
            @foreach ($hmo as $hmos)
            <div class="col-6 col-md-4">
                <div class="text-center" style="margin-bottom: 20px; padding: 10px;">
                <img src="/storage/{{ $hmos->image}}" alt="" class=" rounded-circle img-thumbnail" style="width: 100px;">
                <h4>{{ $hmos->name }}</h4>
                </div>
            </div>
            @endforeach
            </div>
        </div>

        {{ $hmo->links() }}

@endsection


