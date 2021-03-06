@extends('layouts.app')

@section('content')


<div class="container">

<div class="jumbotron text-white" style="background:#800000; color:#ffffff; height:150px;">
  <div class="container">
    <h1 class="align-middle text-center">Careers</h1>
  </div>
</div>

    <div class="row justify-content-center">

        @if ($count == 0)
          <p class="text-center">Sorry, No Careeer Opening available at the moment.</p>
        @else
        <div class="container">
            <div class="row justify-content-md-center">
            @foreach ($careers as $career)
                    <li class="posts clearfix row">
						<div class="col-xs-12 m-3">
							<!-- Department -->
							<span class="post-date">Posted <strong>{{ $career->created_at->format('F Y')}}</strong></span>
						</div>
						<div class="col-xs-12 m-3">
							<h4 class="post-title">{{$career->jobtitle}}</h4>
							<span><div style="font-size: 13px;"><span class="card-text" style="color: rgb(0, 0, 0); font-family: Arial, Helvetica, sans-serif;">
                            {{ Str::limit($career->description, 500)}}</span></div></span>
						</div>
						<div class="col-xs-12 m-3">
							<a class="btn btn-lg btn-danger btn-block" target="_blank" href="https://docs.google.com/forms/d/e/1FAIpQLScNSz1YE4MXnGm8ymucZTOmfrpOkRTF1TxlY6NjopbiVwV8Bw/formResponse" >Apply</a>
						</div>
					</li>

            @endforeach
            </div>
        </div>

        {{ $careers->links() }}
      @endif
</div>
@endsection
