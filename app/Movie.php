<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['body', 'director','mainactor','language','length', 'media','year',];

    public function user() {
        return $this->belongsTo('App\User');
    }

    public function match() {
       $score=($this->type==request('type')?1:0)+ ($this->mainactor==request('mainactor')?1:0)+ ($this->director==request('director')?1:0)+ ($this->year==request('year')?1:0);

       return  ($score/4)*100;
    }
}
