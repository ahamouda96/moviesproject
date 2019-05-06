@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-sm-9">
            

        	@foreach ($movies as $movie)

        <div class="form-group">
            <select class="form-control" name="type"> 
                <option value="{{$movie->type}}">{{$movie->type}}</option>
            </select>
        </div>
           @endforeach

        <div class="form-group">
        	@foreach ($movies as $movie)
            <select class="form-control" name="year"> 
                <option value="{{$movie->mainactor}}">{{$movie->mainactor}}</option>
            </select>
            @endforeach
        </div>
        <div class="form-group">
        	@foreach ($movies as $movie)
            <select class="form-control" name="year"> 
                <option value="{{$movie->director}}">{{$movie->director}}</option>
            </select>
            @endforeach
        </div>

        </div>           
    </div>
 
@endsection