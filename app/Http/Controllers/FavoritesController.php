<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;
use App\User;
use App\Favorite;
use Session;
use Auth;

class FavoritesController extends Controller
{

    public function index(){
        $types = Movie::distinct()->pluck('type')->toArray();
        $mainactor = Movie::distinct()->pluck('mainactor')->toArray();
        $director = Movie::distinct()->pluck('director')->toArray();
        $year = Movie::distinct()->pluck('year')->toArray();
        return view('favorites',compact('types','mainactor','director','year'));
    }

     public function show()
    {

      $array = array();
      $r=Movie::all();
      foreach($r as $key => $value) {
        
         array_push($array, array("score", $value->match())); 
         array_push($array, array("type", $value->type));
         array_push($array, array("mainactor", $value->mainactor)); 
         array_push($array, array("director", $value->director)); 
         array_push($array, array("year", $value->year));

           
        
        
      }
      return redirect()->back()->with(compact('array'));
      
    }

    
}