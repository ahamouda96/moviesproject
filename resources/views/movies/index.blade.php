@extends('layouts.app')

@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <div class="container">
        <div class="col-sm-9">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    {{ Session::get('success') }}
                </div>
            @endif


<form method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                    <input type="text" name="type" class="form-control" placeholder="type">
                    @if ($errors->has('type'))
                        <small class="text-danger">{{ $errors->first('type') }}</small>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('language') ? 'has-error' : '' }}">
                    <input type="text" name="language" class="form-control" placeholder="language">
                    @if ($errors->has('language'))
                        <small class="text-danger">{{ $errors->first('language') }}</small>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('year') ? 'has-error' : '' }}">
                    <input type="text" name="year" class="form-control" placeholder="year">
                    @if ($errors->has('year'))
                        <small class="text-danger">{{ $errors->first('year') }}</small>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                    <input type="text" name="body" class="form-control" placeholder="title">
                    @if ($errors->has('body'))
                        <small class="text-danger">{{ $errors->first('body') }}</small>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('director') ? 'has-error' : '' }}">
                    <input type="text" name="director" class="form-control" placeholder="director">
                    @if ($errors->has('director'))
                        <small class="text-danger">{{ $errors->first('director') }}</small>
                    @endif
                </div>

                <div class="form-group {{ $errors->has('mainactor') ? 'has-error' : '' }}">
                    <input type="text" name="mainactor" class="form-control" placeholder="mainactor">
                    @if ($errors->has('mainactor'))
                        <small class="text-danger">{{ $errors->first('mainactor') }}</small>
                    @endif
                </div>

                

                <div class="form-group {{ $errors->has('length') ? 'has-error' : '' }}">
                    <input type="text" name="length" class="form-control" placeholder="length">
                    @if ($errors->has('length'))
                        <small class="text-danger">{{ $errors->first('length') }}</small>
                    @endif
                </div>
                
                <div class="form-group {{$errors->has('media') ? 'has-error' : ''}}">
                    <input type="file" class="form-control" name="media">
                    @if($errors->has('media'))
                        <small class="text-danger">{{ $errors->first('media') }}</small>
                    @endif
                </div>
               

               
                <input type="submit" value="Add Movie" class="btn btn-primary btn-block">
            </div>
        </div>
    </form>


    @foreach ($movies as $movie)
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h3 class="panel-title">
                       
                        
                    </h3>
                  </div>
                  <div class="panel-body" data-toggle="lightbox">
                    
                    {{ $movie->body }}

                        <video style='width:100%;height:600px;' controls>
                            <source src="/uploads/video/{{$movie->media}}">
                        </video>
                    
                    <br />
                    type: <div class="badge">{{ $movie->type }}</div>
                  </div>
                  
                </div>
            @endforeach
        </div>
        
    </div>
@endsection
