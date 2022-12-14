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
  <header class=
  "font-sans 
  bg-[#5C97BF] 
  p-8 text-center 
  font-['segoe UI'] 
  text-white text-bold">
    <?php require('nav.php');?>
</header>
  
  <div class="
  w-full 
  h-screen 
  flex 
  flex-col 
  justify-center 
  items-center 
  space-y-8 ">
    <!-- Header -->
      <h1 
      x-data="{header:'Building a counter'}"
      x-text="header"
      class="text-green-500 font-bold text-4xl uppercase">
    </h1>

    <!-- counter -->
    <div x-data="{ count: 0 }">
        <button 
        @click="count++"
        class="bg-blue-500 hover:bg-blue-300 px-4 py-2 rounded"
        >Increment</button>
        <span 
        x-text="count"
        class="ml-8 text-green-500 font-bold text-xl"
        ></span>
    </div>
  </div>

</body>
</html>