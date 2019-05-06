@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-sm-9">
            @foreach ($movies as $movie)
            @if($movie->language == 'English')
            <div class="panel panel-default">
              <div class="panel-heading" style="padding: 20px">   
              </div>
                  <div class="panel-body">
                    {{ $movie->body }}
                        <video style='width:100%;height:600px;' controls>
                            <source src="/uploads/video/{{$movie->media}}">
                        </video>                        
                    <br />
                    
                  </div>  
                </div>
                @endif
            @endforeach            
        </div> 
    </div>
 
@endsection



@php


@endphp
