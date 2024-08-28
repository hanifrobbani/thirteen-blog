<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

    <link href="{{ asset('style/main.css') }}" rel="stylesheet">

    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="font-lora">

    <nav class="flex justify-between px-20 py-4 items-center bg-gray-100 fixed z-50 w-full transition-all duration-500 shadow-none" id="navbar">
        <h1 class="text-xl text-white font-bold nav-item">ThirTeen-Blog</h1>
        <div class="flex items-center">
            <div class="flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 pt-0.5 text-white nav-item transition duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
                <input class="ml-2 mr-2 outline-none bg-transparent border-b border-slate-400 focus:border-slate-600 transition duration-300" type="text" name="search" id="search" placeholder="Search..." />
            </div>
            <ul class="flex items-center space-x-6">
                <a href="" class="nav-item border-b-2 border-blue-500 border-opacity-0 hover:border-opacity-100 text-white hover:text-blue-500 transition font-semibold duration-300">
                    <li>Home</li>
                </a>
                <a href="" class="nav-item border-b-2 border-blue-500 border-opacity-0 hover:border-opacity-100 text-white hover:text-blue-500 transition font-semibold duration-300">
                    <li>About</li>
                </a>
                <a href="" class="nav-item border-b-2 border-blue-500 border-opacity-0 hover:border-opacity-100 text-white hover:text-blue-500 transition font-semibold duration-300">
                    <li>Blog</li>
                </a>
                <a href="" class="nav-item border-b-2 border-blue-500 border-opacity-0 hover:border-opacity-100 text-white hover:text-blue-500 transition font-semibold duration-300">
                    <li>Galeri</li>
                </a>
                <li>
                    @auth
                    <div class="relative inline-block text-left">
                        <div>
                            <button type="button" class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-transparent transition-all px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="false" aria-haspopup="true">
                                Options
                                <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>

                        <!-- Dropdown menu -->
                        <div class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1" id="dropdown-menu">
                            <div class="py-1" role="none">
                                <a href="/dashboard" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-0">Dashboard</a>
                                <a href="/blog" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-1">Account Setting</a>
                                <form method="POST" action="/logout" role="none">
                                    @csrf
                                    <button type="submit" class="block w-full px-4 py-2 text-left text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-3">Log out</button>
                                </form>
                            </div>
                        </div>
                    </div>

                    @else
                    <a href="/login" class="px-5 py-2 bg-blue-700 text-white rounded-md hover:bg-blue-500 transition-all duration-150 focus:ring-4 focus:ring-blue-300">Login</a>
                </li>
                @endauth
            </ul>
        </div>
    </nav>
    <main class="max-h-screen">
        <div class="relative overflow-hidden bg-cover bg-no-repeat w-full" style="background-image: url('https://static.wixstatic.com/media/5421e3e82908445d8e688712a83ec01c.jpg/v1/fill/w_1412,h_480,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/5421e3e82908445d8e688712a83ec01c.jpg'); height: 600px;">
            <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.3)">
                <div class="absolute inset-0 flex items-center justify-center container mx-auto max-w-8xl">
                    <div class="text-white text-center w-1/2">
                        <h4 class="text-xl font-semibold">ThirTeen Blog</h4>
                        <h2 class="mb-3 text-6xl font-bold">Going Places</h2>
                        <p>I haven’t been everywhere, but it’s on my list</p>
                        <a href="" type="button" class="block w-2/5 mt-5 mx-auto ripple-container rounded border-2 border-neutral-50 px-7 pb-2 pt-2.5 text-sm font-medium uppercase leading-normal text-neutral-50 transition duration-150 ease-in-out hover:border-neutral-100 hover:bg-neutral-500 hover:bg-opacity-10 hover:text-neutral-100 focus:border-neutral-100 focus:text-neutral-100 focus:outline-none focus:ring-0 active:border-neutral-200 active:text-neutral-200 dark:hover:bg-neutral-100 dark:hover:bg-opacity-10">
                            Create a Blog
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="container max-w-7xl mt-14 w-full mx-auto">
            <div class="flex justify-center items-center h-full">
                <div class="w-3/4 text-center">
                    <h1 class="text-3xl font-semibold mb-2">About Us</h1>
                    <p class="text-base text-slate-600">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos doloremque impedit eius animi provident error sapiente consequatur reiciendis hic! Officia!</p>
                </div>
            </div>

            <div class="container flex justify-center gap-5 mt-4">

                <div class="bg-contain bg-no-repeat bg-center overflow-hidden w-80 h-80 flex justify-center items-center" style="background-image: url(https://images.pexels.com/photos/1600727/pexels-photo-1600727.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2);">
                    <div class="w-[150px] h-[70px] bg-white hover:bg-blue-600 transition duration-300 flex items-center justify-center text-blue-500 text-xl hover:text-white">
                        <p>Fun</p>
                    </div>
                </div>
                <div class="bg-contain bg-no-repeat bg-center overflow-hidden w-80 h-80 flex justify-center items-center" style="background-image: url(https://images.pexels.com/photos/6469/red-hands-woman-creative.jpg?auto=compress&cs=tinysrgb&w=600);">
                    <div class="w-[150px] h-[70px] bg-white hover:bg-blue-600 transition duration-300 flex items-center justify-center text-blue-500 text-xl hover:text-white">
                        <p>Blog</p>
                    </div>
                </div>
                <div class="bg-contain bg-no-repeat bg-center overflow-hidden w-80 h-80 flex justify-center items-center" style="background-image: url(https://images.pexels.com/photos/269583/pexels-photo-269583.jpeg?auto=compress&cs=tinysrgb&w=600);">
                    <div class="w-[150px] h-[70px] bg-white hover:bg-blue-600 transition duration-300 flex items-center justify-center text-blue-500 text-xl hover:text-white">
                        <p>Travel</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="container max-w-7xl mt-14 w-full mx-auto px-14">
            <h1 class="text-3xl">Latest Posts
                <hr class="border border-slate-600 mt-2">
            </h1>
            <div class="flex justify-center flex-col mt-10">
                <div class="w-full flex justify-between gap-4 mb-10">
                    <img src="https://images.pexels.com/photos/18619493/pexels-photo-18619493/free-photo-of-laut-pemandangan-pantai-cinta.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Hai" class="w-1/2 rounded-lg">
                    <div class="w-full">
                        <div class="flex justify-start gap-2">
                            <img class="rounded-full w-12 h-12" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png" alt="profile picture">
                            <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right">
                                <div>Jese Leos</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">3 days Ago . 1 min</div>
                            </div>
                        </div>
                        <div class="container mt-4">
                            <h1 class="text-xl font-semibold mb-2">Title BLog Posts</h1>
                            <p class="text-base font-light text-slate-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis harum, quae totam omnis modi, iusto magni doloribus nam quia, odit eligendi asperiores explicabo excepturi maiores cum! Facilis illo odio soluta.</p>
                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-between gap-4">
                    <img src="https://images.pexels.com/photos/2159065/pexels-photo-2159065.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" alt="Hai" class="w-1/2 rounded-lg">
                    <div class="w-full">
                        <div class="flex justify-start gap-2">
                            <img class="rounded-full w-12 h-12" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/karen-nelson.png" alt="profile picture">
                            <div class="space-y-0.5 font-medium dark:text-white text-left rtl:text-right">
                                <div>Jese Leos</div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">3 days Ago . 1 min</div>
                            </div>
                        </div>
                        <div class="container mt-4">
                            <h1 class="text-xl font-semibold mb-2">Title BLog Posts</h1>
                            <p class="text-base font-light text-slate-500">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quis harum, quae totam omnis modi, iusto magni doloribus nam quia, odit eligendi asperiores explicabo excepturi maiores cum! Facilis illo odio soluta.</p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="flex justify-between gap-4 mt-20 items-end">
                <div class="title font-bold text-2xl">
                    <h1>Our Category</h1>
                </div>
                <div class="category flex gap-4">
                    <h1 class="font-semibold active:bg-slate-900 transition-all duration-200 bg-slate-800 py-2 px-3 rounded-md text-white cursor-pointer">Technologies</h1>
                    <h1 class="font-semibold active:bg-slate-900 transition-all duration-200 bg-slate-800 py-2 px-3 rounded-md text-white cursor-pointer">Art</h1>
                    <h1 class="font-semibold active:bg-slate-900 transition-all duration-200 bg-slate-800 py-2 px-3 rounded-md text-white cursor-pointer">Politic</h1>
                    <h1 class="font-semibold active:bg-slate-900 transition-all duration-200 bg-slate-800 py-2 px-3 rounded-md text-white cursor-pointer">Social</h1>
                    <h1 class="font-semibold active:bg-slate-900 transition-all duration-200 bg-slate-800 py-2 px-3 rounded-md text-white cursor-pointer">Fun</h1>
                    <h1 class="font-semibold active:bg-slate-900 transition-all duration-200 bg-slate-800 py-2 px-3 rounded-md text-white cursor-pointer">Meme</h1>
                </div>
            </div>
            <hr class="border-t-2 border-slate-600 w-3/4 mt-3">
        </div>

        <section class="px-14 max-w-7xl mx-auto">
            <div class="flex justify-start mt-10 flex-wrap gap-7 w-full">
                @foreach ($blogs as $blog)
                <div class="max-w-60 h-auto bg-white rounded-lg">
                    <a href="/blog/{{ $blog->id }}">
                        <img class="rounded-lg object-cover w-full h-1/2" src="{{ $blog->image ? asset('storage/' . $blog->image) : 'https://picsum.photos/200/300?random=' . rand() }}" alt="" />
                    </a>
                    <div class="pt-2">
                        <a href="" class="text-base font-bold text-blue-700">{{ $blog->jenis->nama_jenis }}</a>
                        <a href="/blog/{{ $blog->id }}">
                            <h5 class="mb-2 text-lg font-bold tracking-tight text-gray-900 dark:text-white hover:text-blue-700 hover:underline transition duration-300">{{ \Illuminate\Support\Str::limit($blog->judul, 35, '...') }}</h5>
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

            <div class="flex justify-center items-center">
                <a href="/post" class="inline-flex justify-center items-center px-3 py-2 text-base font-medium text-center text-slate-700 focus:outline-none hover:underline">
                    See more
                    <svg class="rtl:rotate-180 w-5 h-5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                    </svg>
                </a>
            </div>
        </section>

        <section class="px-14 max-w-7xl mx-auto my-12">
            <div class="w-full h-36 bg-gray-700 bg-cover bg-center flex justify-around items-center" style="background-image: url('https://media.istockphoto.com/id/1065920512/id/foto/latar-belakang-gelombang-aliran-biru-abstrak.jpg?s=612x612&w=0&k=20&c=xQQZBnPDBnYzwDK2cfCOUUGQ7nYFSztQ7k3RGkT587Y=');">
                <h1 class="text-white text-3xl font-bold inline">Buat sebuah Blog dengan Mudah dan Menyenangkan!</h1>
                <a href="/blog" class="px-4 py-2 bg-blue-600 font-bold text-white border-2 border-opacity-0 border-white hover:bg-transparent hover:border-opacity-100 transition duration-300">Create Now!</a>
            </div>
        </section>

        <section class="px-14 max-w-7xl mx-auto">

            <div class="container mb-5">
                <div class="flex justify-start items-center gap-4">
                    <h1 class="text-3xl font-semibold mb-1">Trending Blog</h1>
                    <hr class="border-t-2 border-slate-400 w-3/4">
                </div>
            </div>
            <swiper-container class="mySwiper" pagination="true" pagination-clickable="true" space-between="20" slides-per-view="4">

                @foreach ($blogs as $blog)
                <swiper-slide>
                    <div class="relative max-w-64 h-80 border-2 overflow-hidden">
                        <img class="w-full h-full object-cover" src="{{ $blog->image ? asset('storage/' . $blog->image) : 'https://picsum.photos/200/300?random=' . rand() }}" alt="Blog Image">
                        <div class="absolute bottom-0 left-0 w-full bg-opacity-40 bg-black text-white px-4 py-2">
                            <p class="bg-blue-800 p-1 rounded-md font-semibold mb-1 inline">{{ $blog->jenis->nama_jenis }}</p>
                            <p class="font-bold mb-2 text-lg">{{ \Illuminate\Support\Str::limit($blog->judul, 35, '...') }}</p>
                            <p class="font-semibold text-slate-200">By - {{ \Illuminate\Support\Str::limit($blog->judul, 15, '...') }}</p>
                            <p class="font-semibold text-slate-300">{{ $blog->created_at->diffForHumans() }}</p>
                        </div>
                    </div>

                </swiper-slide>
                @endforeach

            </swiper-container>
        </section>

        <footer class="bg-slate-900 w-full h-auto mt-20">
            <div class="container px-14 py-8 max-w-7xl mx-auto">
                <div class="flex justify-between py-4">
                    <div class="container">
                        <div class="flex justify-start gap-5 mb-7 flex-col w-5/6">
                            <h1 class="text-slate-100 font-bold text-2xl -mb-2">Thirteen Blog</h1>
                            <p class="text-slate-400">Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis at repudiandae possimus asperiores distinctio dolore porro obcaecati eius saepe nisi sunt nobis, explicabo iste iusto ad similique cumque cupiditate amet.</p>
                        </div>
                        <div class="flex justify-start mt-4 gap-2">
                            <div class="bg-slate-700 p-2 rounded-full hover:bg-blue-600 transition duration-300 cursor-pointer">
                                <svg class="w-6 h-6 text-white text-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="bg-slate-700 p-2 rounded-full hover:bg-blue-600 transition duration-300 cursor-pointer">
                                <svg class="w-6 h-6 text-white text-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="bg-slate-700 p-2 rounded-full hover:bg-blue-600 transition duration-300 cursor-pointer">
                                <svg class="w-6 h-6 text-white text-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12.51 8.796v1.697a3.738 3.738 0 0 1 3.288-1.684c3.455 0 4.202 2.16 4.202 4.97V19.5h-3.2v-5.072c0-1.21-.244-2.766-2.128-2.766-1.827 0-2.139 1.317-2.139 2.676V19.5h-3.19V8.796h3.168ZM7.2 6.106a1.61 1.61 0 0 1-.988 1.483 1.595 1.595 0 0 1-1.743-.348A1.607 1.607 0 0 1 5.6 4.5a1.601 1.601 0 0 1 1.6 1.606Z" clip-rule="evenodd" />
                                    <path d="M7.2 8.809H4V19.5h3.2V8.809Z" />
                                </svg>
                            </div>
                            <div class="bg-slate-700 p-2 rounded-full hover:bg-blue-600 transition duration-300 cursor-pointer">
                                <svg class="w-6 h-6 text-white text-center" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd" />
                                    <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z" />
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="w-full">
                        <div class="flex justify-start gap-20">
                            <div class="flex justify-start gap-4 text-slate-400 flex-col">
                                <h1 class="text-slate-100 font-bold text-xl -mb-1">Use Links</h1>
                                <a href="" class="hover:underline">Home</a>
                                <a href="" class="hover:underline">About</a>
                                <a href="" class="hover:underline">Blogs</a>
                                <a href="" class="hover:underline">Galeri</a>
                            </div>
                            <div class="flex justify-start gap-4 text-slate-400 flex-col">
                                <h1 class="text-slate-100 font-bold text-xl -mb-1">Category</h1>
                                <a href="" class="hover:underline">Tech</a>
                                <a href="" class="hover:underline">Social</a>
                                <a href="" class="hover:underline">Politic</a>
                                <a href="" class="hover:underline">Meme</a>
                                <a href="" class="hover:underline">Other</a>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <h1 class="text-slate-100 font-bold text-xl mb-1">Join My Mailing list</h1>
                        <p class="text-sm text-slate-300 mb-5">*Email</p>
                        <div class="flex justify-center gap-5 mb-5">
                            <input type="text" class="bg-transparent border-2 border-gray-500 text-sm rounded focus:border-slate-200 focus:border-2 transition-all w-full p-2 text-slate-200 outline-none" required placeholder="You're Email" />
                        </div>
                        <div class="flex justify-between gap-2 mt-4">
                            <button class="bg-transparent border-2 border-white hover:border-opacity-0 outline-none hover:bg-blue-700 rounded px-4 py-2 text-white font-semibold transition-all duration-300 w-full">Subscribe Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container border-t border-slate-400">
                <div class="px-14 py-8 max-w-7xl mx-auto flex justify-between">
                    <h1 class="text-slate-300">Copyright &COPY; 2024 <span class="text-blue-500 font-semibold">ThirTeen-Blog.</span> All Rights Reserved.</h1>
                    <h1 class="text-slate-300">Privacy Policy | Terms & Conditions.</h1>
                </div>
            </div>
        </footer>
    </main>

    <script src="{{ asset('js/main.js') }}"></script>
    <!-- swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
</body>

</html>