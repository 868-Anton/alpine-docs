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
    x-data="{
        search: '',
 
        items: ['football', 'bar', 'baz', 'park'],
 
        get filteredItems() {
            return this.items.filter(
                i => i.startsWith(this.search)
            )
        }
    }"
  class="w-full h-screen flex flex-col justify-center items-center space-y-8 "> 

    <input 
    x-model="search" 
    placeholder="Search..."
    class="border-2 border-neutral-900 rounded-full px-4 py-2 bg-[#34415E] text-white"
    >
 
    <ul>
        <template x-for="item in filteredItems" :key="item">
            <li x-text="item"></li>
        </template>
    </ul>
</div>  

</body>
</html>