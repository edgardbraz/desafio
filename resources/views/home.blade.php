@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(!is_null($events) && !empty($events))
                @foreach($events as $event)
                    <a href="{{$event['image']}}" data-fancybox="images" data-caption="<h4>{{$event['title']}}</h4> <p>{{$event['description']}}</p>">
                        <img src="{{$event['image']}}" alt="" class="img-fluid" />
                    </a>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
