<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Anton Graham</title>
  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Alpine JS CDN -->
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <!-- Font Awesome CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

</head>

<body>

  <div class="
  w-full 
  h-screen 
  flex flex-col 
  justify-center 
  items-center space-y-8 "
  >

    <h1>Top Performing Users</h1>

    <?php
    $usernames = ['John', 'Max', 'Anton'];
    ?>
    <ul>
      <?php foreach ($usernames as $username) {
        echo "<li>{$username}</li>";
      }
      ?>
    </ul>

    <h1>Top Performing Users - shorthand syntax</h1>
    <!-- shorthand -->
    <ul>
      <?php foreach ($usernames as $username) : ?>
        <li><?= $username; ?> </li>
      <?php endforeach; ?>
    </ul>
  </div>


  <div class="
  w-full 
  h-screen 
  flex flex-col 
  justify-center 
  items-center space-y-8 "
  >
    <h1>Books Names</h1>

    <?php
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
    ?>
    
    <ul>
      <?php foreach ($books as $book) : ?>
        <li><?= $book['name']; ?> : <?= $book['year']; ?> </li>
      <?php endforeach; ?>
    </ul>


  </div>

  <div class="
  w-full 
  h-screen 
  flex flex-col 
  justify-center 
  items-center space-y-8 "
  >

  <?php 
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
        'year'=> '1999',
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
      //
      $filteredMovies= [];

      foreach($movies as $movie){

        if ($movie['genre'] === $genre ){
          
          $filteredMovies[] = $movie;
        }
      }
        return $filteredMovies;
    };
    $filteredMovies = $lambdaFnFilteredMovies($favoriteMovies, 'comedy');

    //making my function more generic 
    //by refactoring     
    function filter($items, $key, $value){
      //
      $filteredItems= [];

      foreach($items as $item){

        if ($item[$key] === $value ){
          
          $filteredItems[] = $item;
        }
      }
        return $filteredItems;
    }







  ?>

<h1>Filter Movies by Genre using lambda function</h1>
<ul>
    <?php foreach($filteredMovies as $movie):?>
  <li>
    <?= $movie['name']?>
  </li>
  <?php endforeach;?>
</ul>
  </div>

  <div class="
  w-full 
  h-screen 
  flex flex-col 
  justify-center 
  items-center space-y-8 "
  >
  <h1>Refactored filter by Movie</h1>
  <ul>
    <?php foreach(filter($favoriteMovies,'year','1998') as $movie):?>
  <li>
    <?= $movie['name']?>
  </li>
  <?php endforeach;?>
</ul>

  </div>


</body>

</html>