@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-sm-9">
           

<form method="post" action="/favorites/show" enctype="multipart/form-data">
                {{ csrf_field() }}
        <div class="form-group">
            Type: 
            <select class="form-control" name="type"> 
                 @foreach ($types as $type)
                <option value="{{$type}}">{{$type}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            Main actor:
            <select class="form-control" name="mainactor"> 
                 @foreach ($mainactor as $m)
                <option value="{{$m}}">{{$m}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            Director:
            <select class="form-control" name="director"> 
                 @foreach ($director as $d)
                 <option value="{{$d}}">{{$d}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            Year:
            <select class="form-control" name="year"> 
                 @foreach ($year as $y)
                 <option value="{{$y}}">{{$y}}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="Next" class="btn btn-primary btn-block">
    </form>


     @if(session('array'))
    {!! print_r(session('array')) !!}
    @endif
        


        
        </div>           
    </div>
 
@endsection


