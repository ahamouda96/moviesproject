<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;
use App\User;
use Session;
use Auth;

class MoviesController extends Controller
{
     public function index()
    {
        $movies = Movie::all()->sortByDesc('id');
        return view('movies.index')->withMovies($movies);
    }

   
    public function store(Request $request)
    {
        $this->validate($request, [
            'type' => 'required',
            'body' => 'required|max:255',
            'director' => 'required',
            'mainactor' => 'required',
            'language' => 'required',
            'length' => 'required',
            'year' => 'required'
        ]);
        $movie=new Movie();
        $movie->type=$request->type;
        $movie->year = $request->year;
        $movie->language = $request->language;
        $movie->mainactor=$request->mainactor;
        $movie->body=$request->body;
        $movie->director=$request->director;
        $movie->length=$request->length;
        $movie->user_id=Auth::user()->id;;
        

        if ($request->hasFile('media')) {
            $file = $request->file('media');
            $mediaType=explode('/',$file->getMimeType())[0];
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $location = public_path('/images/' . $filename);
            if($mediaType == "video"){
                $file->move('uploads/video', $location);
                $movie->media = $filename;
            }else{
                return redirect('movies')->with('error');
            }
            
        }
        $movie->save();       
        Session::flash('success', 'movie was successfully added');
        return redirect('/movies');
    }    
    public function destroy($id)
    {
        $movie = Movie::find($id);
        $movie->delete();
        Session::flash('success', 'movie was succesfully deleted');
        return redirect()->back();
    }
}
