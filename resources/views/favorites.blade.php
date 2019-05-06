@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-sm-9">
           


        <div class="form-group">
            <select class="form-control" name="year"> 
                 @foreach ($types as $type)
                <option value="{{$type}}">{{$type}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="year"> 
                 @foreach ($mainactor as $m)
                <option >{{$m}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="year"> 
                 @foreach ($director as $d)
                <option value="{{$d}}">{{$d}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <select class="form-control" name="year"> 
                 @foreach ($year as $y)
                <option value="{{$y}}">{{$y}}</option>
                @endforeach
            </select>
        </div>
        

        
        </div>           
    </div>
 
@endsection


