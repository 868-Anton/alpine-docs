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


<body >

<header class="font-sans bg-[#5C97BF] p-8 text-center font-['segoe UI'] text-white text-bold">
<?php require('nav.php');?>

</header>
  <div class="w-full h-screen flex flex-col justify-center items-center space-y-8">
    <div class="p-6 bg-gray-500 rounded-xl shadow-lg flex  space-x-4">
      
      <div class="text-4xl">
        😍
      </div>
      <div>
        <div class="text-xl font-medium text-black">Alpine JS</div>
        <p x-data="{message:'I ❤️ Alpine' }" x-text="message" class="text-black px-2"></p>
      </div>
    </div>
  </div>
</body>
</html>