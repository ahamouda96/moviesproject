Details
laravel pages with the following:
* ontrollers in website
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

2.	Index Action to List ALL items
3.	SetPreferences action  (HttpGet)- with a form view to set user’s preferences, and a submit button to send that preferences to next Action (RecommendTop)
