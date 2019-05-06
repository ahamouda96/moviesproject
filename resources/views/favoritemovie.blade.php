@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="col-sm-9">
            @foreach ($movies as $movie)


        <div class="form-group">
            @foreach ($movies as $movie)
            <select class="form-control" name="type"> 
                <option value="{{$movie->type}}">{{$movie->type}}</option>
            </select>
            @endforeach
        </div>
        <div class="form-group">
            @foreach($movies as $movie)
            <select class="form-control" name="mainactor"> 
                <option value="{{$movie->mainactor}}">{{$movie->mainactor}}</option>
            </select>
            @endforeach
        </div>
        <div class="form-group">
@foreach($movies as $movie)
            <select class="form-control" name="year"> 
                <option value="{{$movie->director}}">{{$movie->director}}</option>
            </select>
            @foreach($movies as $movie)
        </div>

@endforeach        
        </div>           
    </div>
 
@endsection







       <!-- <div class="col-md-8 col-md-offset-2">
          
            <div class="panel panel-default">
                <div class="panel-heading">
                  <h3>What are you interested in?</h3>
                  <p>Select some topics you are interested in to help personalize your experience</p>
                </div>
                
          <form  method="post" enctype="multipart/form-data">
            {{ csrf_field() }} -->
            <!-- <input type="checkbox" name="vehicle" value="Bike">I have a bike
            <br>
            <input type="checkbox" name="vehicle" value="Car">I have a car --> 

            

                   <!--  <div class="form-group">
                        <select class="form-control" name="year"> 
                          @foreach ($movies as $movie)
                                <option value="{{$movie->year}}">{{$movie->year}}</option>
                            @endforeach             
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="mainactor"> 
                                @foreach ($movies as $movie)
                                <option value="{{$movie->mainactor}}">{{$movie->mainactor}}</option>   
                                @endforeach              
                        </select>
                    </div>

                    <div class="form-group">
                        <select class="form-control" name="director"> 
                                @foreach ($movies as $movie)
                                <option value="{{$movie->director}}">{{$movie->director}}</option>   
                                @endforeach              
                        </select>
                    </div>
                     
                     <div class="form-group">
                        <select class="form-control" name="language"> 
                                @foreach ($movies as $movie)
                                <option value="{{$movie->language}}">{{$movie->language}}</option>   
                                @endforeach              
                        </select>
                    </div>
                    
                     <div class="form-group">
                        <select class="form-control" name="length"> 
                          @foreach ($movies as $movie)
                                <option value="{{$movie->length}}">{{$movie->length}}</option>   
                                @endforeach           
                        </select>
                    </div>
                    
                    <input type="submit" value="Next" class="btn btn-primary btn-block">
          </form>
        </div>
      </div> -->

</div>
  </div> -->
@endsection








 