<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
  @vite('resources/css/app.css')

  <link href="{{ asset('style/main.css') }}" rel="stylesheet">

</head>

<body>
  <!-- component -->
  <nav class="flex justify-between px-10 py-4 items-center bg-white fixed z-50 w-full transition-all duration-500 shadow-none " id="navbar2">
    <a href="/dashboard" class="flex ms-2 md:me-24">
      <img src="{{ asset('img/logo13.png')}}" class="h-10 me-3" alt="FlowBite Logo" />
      <span class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Thirteen Blog</span>
    </a>
    <div class="flex items-center">
      <div class="flex items-center">
        <!-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 pt-0.5 text-gray-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg> -->
        <!-- <input class="ml-2 outline-none bg-transparent font-" type="text" name="search" id="search" placeholder="Search..." /> -->
      </div>
      <ul class="flex items-center space-x-6">
        <a href="">
          <li class="font-semibold text-gray-700 hover:underline hover:text-blue-600 transition">Home</li>
        </a>
        <a href="">
          <li class="font-semibold text-gray-700 hover:underline hover:text-blue-600 transition">Contact Us</li>
        </a>
        <li class="flex gap-4">
          <button class="px-7 py-2 rounded-full bg-blue-600 outline-none text-white focus:ring-4 focus:ring-blue-300 transition duration-200">Login</button>
          <button class="px-7 py-2 rounded-full outline-none border border-black hover:bg-black hover:text-white transition duration-200" aria-label="Sign In">
            Sign In
          </button>

        </li>
      </ul>
    </div>
  </nav>

  <main class="pt-32 max-w-7xl px-10 mx-auto">
    <div class="flex justify-between">
      <div class="w-1/2 flex flex-col justify-between">
        <h1 class="text-5xl font-bold pr-10">How to Start a Blog In 2024: The Ultimate Guide </h1>
        <div>
          <a href="/blog" class="flex items-center mb-1 text-slate-600">
            <p class="text-lg">Read More</p>
            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M7.82054 20.7313C8.21107 21.1218 8.84423 21.1218 9.23476 20.7313L15.8792 14.0868C17.0505 12.9155 17.0508 11.0167 15.88 9.84497L9.3097 3.26958C8.91918 2.87905 8.28601 2.87905 7.89549 3.26958C7.50497 3.6601 7.50497 4.29327 7.89549 4.68379L14.4675 11.2558C14.8581 11.6464 14.8581 12.2795 14.4675 12.67L7.82054 19.317C7.43002 19.7076 7.43002 20.3407 7.82054 20.7313Z" fill="#475569" />
            </svg>
          </a>
          <hr class="border-t-2 border-slate-500 w-3/4">
        </div>
      </div>
      <img src="https://images.unsplash.com/photo-1546422904-90eab23c3d7e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8bmV3c3xlbnwwfHwwfHx8MA%3D%3D" alt="Main image" class="w-1/2 rounded">
    </div>


    <div class="flex justify-center mt-32 flex-wrap gap-5 w-full">
      @foreach ($blogs as $blog)
      <div class="max-w-60 h-auto bg-white rounded">
        <a href="/blog/{{ $blog->id }}">
          <img class="rounded object-cover w-full h-1/2" src="{{ $blog->image ? asset('storage/' . $blog->image) : 'https://picsum.photos/200/300?random=' . rand() }}" alt="" />
        </a>
        <div class="pt-2">
          <a href="" class="text-base font-bold text-blue-700">{{ $blog->jenis->nama_jenis }}</a>
          <a href="/blog/{{ $blog->id }}">
            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white hover:text-blue-700 hover:underline transition duration-300">{{ \Illuminate\Support\Str::limit($blog->judul, 50, '...') }}</h5>
          </a>
          <div class="flex gap-2 mt-3">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
              <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 10h16m-8-3V4M7 7V4m10 3V4M5 20h14a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H5a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1Zm3-7h.01v.01H8V13Zm4 0h.01v.01H12V13Zm4 0h.01v.01H16V13Zm-8 4h.01v.01H8V17Zm4 0h.01v.01H12V17Zm4 0h.01v.01H16V17Z" />
            </svg>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{ $blog->created_at->diffForHumans() }}</p>
          </div>
        </div>
      </div>
      @endforeach
    </div>

    <div class="w-full flex justify-center mt-4 pb-10">
      {{ $blogs->links('vendor.pagination.mypagination') }}
    </div>

  </main>
  <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>