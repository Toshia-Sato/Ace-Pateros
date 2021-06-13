@extends('layouts.app')

@section('content')
<br><br>
<div class="container">
            <div class="row justify-content-md-center">
            @foreach ($doctors as $doctor)
            <div class="col-6 col-md-4">
                <div class="border text-center" style="margin-bottom: 20px; padding: 10px;">
                <img src="/storage/{{ $doctor->image}}" alt="" class=" rounded-circle img-thumbnail" style="width: 100px;">
                <h4>{{ $doctor->name }}</h4>
                <h4>{{ $doctor->specialization->specialization }}</h4>
                </div>
            </div>
            @endforeach
            </div>
        </div>

        {{ $doctors->links() }}

        @endsection