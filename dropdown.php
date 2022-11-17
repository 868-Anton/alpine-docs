<!DOCTYPE html >
<html lang="en" class="h-full">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Building a counter</title>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Alpine JS CDN -->
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <!-- Font Awesome CDN -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet">

</head>
<body>
<header class="font-sans bg-[#5C97BF] p-8 text-center font-['segoe UI'] text-white text-bold">
    <nav class="bg-[#34415E] p-2 rounded-full">
      <ul class="flex justify-around ">
        <li ><a href="i-love-alpine.html">Start here</a></li>
        <li ><a href="counter.html">Building a counter</a></li>
        <li ><a href="dropdown.html">Building a dropdown</a></li>
        <li ><a href="searchInput.html">Search input</a></li>
      </ul>
    </nav>
</header>
  
  <div 
  x-data = "{
    on:false,
    toggle(){
      this.on =!this.on
    }
  }"
  class="w-full h-screen flex flex-col justify-center items-center space-y-8 ">

    <div>
      <h1 class="text-5xl">See testimonials 
        <span
        @click="toggle" 
        class="text-lg bg-blue-500 px-4 py-2 rounded text-white hover:bg-blue-300 cursor-pointer  "
        >toggle to see
      </span>
      </h1>
    </div>

    <div 
      x-show="on"
      @click.outside="on = false"
      class="bg-white w-72 h-80 p-8 rounded-xl  mx-auto flex flex-col justify-between items-start">

        <img class="h-10" src="https://res.cloudinary.com/thirus/image/upload/v1629308145/logos/quote-left_tsopjj_zviayy.svg" alt="">
        <p>
          I just finished my trial period and was so amazed with the support and good results that I purchased the Pro version for my business.
        </p>
        <span class="font-bold text-lg">Mark Graham</span>
      </div>

  </div>

</body>
</html>