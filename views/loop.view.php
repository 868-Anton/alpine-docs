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
    <?php foreach($refactoredFnFilter as $movie):?>
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
  <h1> filtered using PHP built in filter</h1>
  <ul>
    <?php foreach($refactoredPHPFilter as $movie):?>
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
  <h1> filtered using PHP built in filter and multisort</h1>
  <ul>
    <?php foreach($refactoredPHPFilter as $movie):?>
  <li>
    <?= $movie['year']?>
  </li>
  <?php endforeach;?>
</ul>
  </div>


</body>

</html>