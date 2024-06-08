<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <nav class="p-4 bg-slate-300 mb-5">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo -->
        <a class="text-lg font-semibold">MyWebsite</a>

        <!-- Mobile Menu Button -->
        <button class="text-white focus:outline-none lg:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Menu Items -->
        <ul class="hidden lg:flex lg:space-x-4">
            <li><a href="/" class=" hover:font-extrabold">Home</a></li>
            <li><a href="/view/data" class=" hover:font-extrabold">View</a></li>
            <li><a href="" class=" hover:font-extrabold">Services</a></li>
            <li><a href="/form" class=" hover:font-extrabold">Contact</a></li>
        </ul>
    </div>

    <!-- Mobile Menu -->
    <div class="lg:hidden mt-4">
        <ul class="flex flex-col space-y-2">
            <li><a href="/" class="block px-4 py-2 rounded-md">Home</a></li>
            <li><a href="/view/data" class="block px-4 py-2 rounded-md">View</a></li>
            <li><a href="#" class="block px-4 py-2 rounded-md">Services</a></li>
            <li><a href="/form" class="block px-4 py-2 rounded-md">Contact</a></li>
        </ul>
    </div>
</nav>


  
</body>
</html>