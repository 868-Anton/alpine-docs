<?php

//parse gives us the path or the query
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];


//define routes here
$routes = [
  '/' => 'controllers/index.php',
  '/about' => 'controllers/about.php',
  '/contact' => 'controllers/contact.php',
  '/notes' => 'controllers/notes.php',
  '/note' => 'controllers/note.php',
];

//router functions
function routeToController($uri,$routes){
  if(array_key_exists($uri,$routes)){
    require $routes[$uri];
  }else{
    abort();
  }
}


function abort($code = 404){
  http_response_code($code);

  require("views/{$code}.view.php");

    die();
}

//make routes here
routeToController($uri,$routes);

