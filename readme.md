Details
laravel pages with the following:
* Controllers
  * MoviesController
    * index function to return all movies in database and view in home page. 
    * contains create function to create new movies.
  
  * FavoriteController
    * index function to view form to select what you are interested in.
    * show function to push requested values from form to array and then calculate match score for every movies in DB and user inputs.
    
    hint the function that calculate match score is match() in Movie Model.
    
    
        public function match() {
            
         $score=($this->type==request('type')?1:0)+ ($this->mainactor==request('mainactor')?1:0)+ ($this->director==request('director')?                  1:0)+ ($this->year==request('year')?1:0);
         return  ($score/4)*100;
         }



* routes
  * web.php
  
            Route::resource('/home','HomeController'); // to get all movies in project

            Route::get('/favorites', 'FavoritesController@index');

            Route::post('/favorites/show', 'FavoritesController@show');

            Route::resource('/movies', 'moviesController');
            
   
  * views
    * favorites.blade.php 
        * contains favorite form
     * home.blade.php
        * contains all movies
            
