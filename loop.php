<?php 
    $usernames = ['John', 'Max', 'Anton'];

$books = [
  [
    'name' => 'The power of positive thinking',
    'author' => 'Norman Vincent Peale',
    'year' => 2015
  ],
  [
    'name' => 'The Four Agreements',
    'author' => 'Don Miguel Ruiz',
    'year' => 1997

  ]
];

$favoriteMovies = [
  [
    'name'=> 'No Time to Die',
    'year'=> '1995',
    'genre'=>'action'
  ],
  [
    'name'=> 'Bajocero',
    'year'=> '1996',
    'genre'=>'action'
  ],
  [
    'name'=> 'The Suicide Squad',
    'year'=> '2000',
    'genre'=>'action'
  ],
  [
    'name'=> 'Shang-Chi and the Legend of the Ten Rings',
    'year'=> '1999',
    'genre'=>'action'
  ],

    
  [
    'name'=> 'Plan B',
    'year'=> '2000',
    'genre'=>'comedy'
  ],
  [
    'name'=> 'Shiva Baby.',
    'year'=> '1998',
    'genre'=>'comedy'
  ],
  [
    'name'=> 'Language Lessons',
    'year'=> '2021',
    'genre'=>'comedy'
  ],
  [
    'name'=> 'The Paper Tigers',
    'year'=> '1997',
    'genre'=>'comedy'
  ],
  [
    'name'=> 'The Gray Man.',
    'year'=> '2006',
    'genre'=>'action'
  ],
  [
    'name'=> 'Jurassic World: Dominion',
    'year'=> '2010',
    'genre'=>'action'
  ],
  [
    'name'=> 'Prey',
    'year'=> '2015',
    'genre'=>'action'
  ],
  [
    'name'=> 'Bullet Train',
    'year'=> '2003',
    'genre'=>'action'
  ],

    
  [
    'name'=> 'Book of Love',
    'year'=> '2008',
    'genre'=>'comedy'
  ],
  [
    'name'=> 'I Want You Back',
    'year'=> '2010',
    'genre'=>'comedy'
  ],
  [
    'name'=> 'Marry Me',
    'year'=> '2003',
    'genre'=>'comedy'
  ],
  [
    'name'=> 'Dog',
    'year'=> '2013',
    'genre'=>'comedy'
  ],
];

//named function
function filterByGenre($movies, $genre){
  //
  $filteredMovies= [];

  foreach($movies as $movie){

    if ($movie['genre'] === $genre ){
      
      $filteredMovies[] = $movie;
    }
  }
    return $filteredMovies;
}
// $filteredMovies = filterByGenre($favoriteMovies, 'comedy');

//lambda function 
$lambdaFnFilteredMovies= function ($movies, $genre){
  
  $filteredMovies= [];

  foreach($movies as $movie){

    if ($movie['genre'] === $genre ){
      
      $filteredMovies[] = $movie;
    }
  }
    return $filteredMovies;
};

$filteredMovies = $lambdaFnFilteredMovies($favoriteMovies, 'comedy');

// making my function more generic 
// by refactoring     
function filtered($items, $key, $value){
  //
  $filteredItems= [];

  foreach($items as $item){

    if ($item[$key] === $value ){
      
      $filteredItems[] = $item;
    }
  }
    return $filteredItems;
}

//extracting our signatures to a $fn
function filter($items, $fn)
{
  //
  $filteredItems= [];

  foreach($items as $item){

    if ($fn($item)){
      
      $filteredItems[] = $item;
    }
  }
    return $filteredItems;
}

$refactoredFnFilter = filter($favoriteMovies,function($favoriteMovie){
  return $favoriteMovie['genre'] === 'action';
});

// Home work filter year between 2000 and 2021 
$refactoredPHPFilter = array_filter($favoriteMovies,function($favoriteMovie){
  return $favoriteMovie['year'] > '1999' && $favoriteMovie['year'] <= '2021';
});

require "views/loop.view.php";