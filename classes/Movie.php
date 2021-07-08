<?php 

class Movie {
    public $posterPath;
    public $originalTitle;
    public $language;
    public $country;
    public $genres;
    public $director;
    public $cast;
    public $overview;
    public $avgRating;
    public $ratings;
    
    function __construct($posterPath = '', $originalTitle, $director = '', $language, $country = [], $genres = [], $cast = [], $overview, $avgRating = 0, $ratings = []) {                                
        $this->posterPath = $posterPath;
        $this->originalTitle = $originalTitle;
        $this->director = $director;
        $this->language = $language;
        $this->country = $country;
        $this->genres = $genres;
        $this->cast = $cast;
        $this->overview = $overview;
        $this->avgRating = $avgRating;
        $this->ratings = $ratings;
    }

    public function addRating($rating) {
        $this->ratings[] = $rating;
    }

    public function setAvgRating($ratings) {
        
        if(count($ratings)) {
            $this->avgRating = array_sum($ratings)/count($ratings);
            $this->avgRating = number_format($this->avgRating, 1);            
        }
    }
}