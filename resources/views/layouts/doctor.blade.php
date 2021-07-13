@extends('layouts.app')

@section('content')
<div class="container">

<div class="jumbotron text-white" style="background:#800000; color:#ffffff; height:150px;">
  <div class="container">
    <h1 class="align-middle text-center">{{$cap}}</h1>
  </div>
</div>

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