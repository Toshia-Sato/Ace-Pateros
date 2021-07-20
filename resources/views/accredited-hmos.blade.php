@extends('layouts.app')

@section('content')

<div class="jumbotron text-white" style="background:#800000; color:#ffffff; height:150px;">
  <div class="container">
    <h1 class="align-middle text-center">Accredited HMO</h1>
  </div>
</div>

      @if ($count== 0)
          <p class="text-center">Sorry, No Accredited HMO available at the moment.</p>
      @else
        <div class="container">
            <div class="row justify-content-md-center">
            @foreach ($hmo as $hmos)
            
            <div class="col-6 col-md-4">
            <a target="_blank" href="{{ $hmos->url}}" class="href">
                <div class="text-center" style="margin-bottom: 20px; padding: 10px;">
                <img src="/storage/{{$hmos->image}}" alt="" class=" rounded-circle img-thumbnail">
                <h4 class="mt-2 text-success">{{ $hmos->name }}</h4>
                </div>
              </a>
            </div>
           
            @endforeach
            </div>
        </div>

        {{ $hmo->links() }}
      @endif
@endsection


