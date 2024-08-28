<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    @vite('resources/css/app.css')

    <link href="{{ asset('style/main.css') }}" rel="stylesheet">

</head>

<body class="font-sans bg-zinc-200">
    <form action="/login" method="post">
        @csrf
        @if(session()->has('loginError'))
        <div id="alert" class="fixed top-4 right-96 z-50 flex w-96 shadow-lg rounded-lg">
            <div class="bg-red-600 py-4 px-6 rounded-l-lg flex items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" class="fill-current text-white" width="20" height="20">
                    <path fill-rule="evenodd" d="M4.47.22A.75.75 0 015 0h6a.75.75 0 01.53.22l4.25 4.25c.141.14.22.331.22.53v6a.75.75 0 01-.22.53l-4.25 4.25A.75.75 0 0111 16H5a.75.75 0 01-.53-.22L.22 11.53A.75.75 0 010 11V5a.75.75 0 01.22-.53L4.47.22zm.84 1.28L1.5 5.31v5.38l3.81 3.81h5.38l3.81-3.81V5.31L10.69 1.5H5.31zM8 4a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5A.75.75 0 018 4zm0 8a1 1 0 100-2 1 1 0 000 2z"></path>
                </svg>
            </div>
            <div class="px-4 py-6 bg-white rounded-r-lg flex justify-between items-center w-full border border-l-transparent border-gray-200">
                <div>{{ session('loginError') }}</div>
                <button id="close-btn" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-current text-gray-700" viewBox="0 0 16 16" width="20" height="20">
                        <path fill-rule="evenodd" d="M3.72 3.72a.75.75 0 011.06 0L8 6.94l3.22-3.22a.75.75 0 111.06 1.06L9.06 8l3.22 3.22a.75.75 0 11-1.06 1.06L8 9.06l-3.22 3.22a.75.75 0 01-1.06-1.06L6.94 8 3.72 4.78a.75.75 0 010-1.06z"></path>
                    </svg>
                </button>
            </div>
        </div>
        @endif
        <div class="container max-w-7xl mx-auto min-h-screen flex justify-center items-center">
            <div class="w-8/12 rounded-lg shadow-xl h-full flex justify-between bg-white">
                <div class="w-full p-10">
                    <h1 class="text-3xl font-bold">Welcome Back!</h1>
                    <p class="mb-4 text-slate-500 font-normal">I'm glad to See you Again...</p>
                    <div class="flex justify-center gap-2">
                        <div class="w-full border-2 flex gap-1 p-2 justify-center items-center rounded-lg hover:bg-slate-100 transition duration-200 hover:border-opacity-0">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 48 48">
                                <path fill="#fbc02d" d="M43.611,20.083H42V20H24v8h11.303c-1.649,4.657-6.08,8-11.303,8c-6.627,0-12-5.373-12-12	s5.373-12,12-12c3.059,0,5.842,1.154,7.961,3.039l5.657-5.657C34.046,6.053,29.268,4,24,4C12.955,4,4,12.955,4,24s8.955,20,20,20	s20-8.955,20-20C44,22.659,43.862,21.35,43.611,20.083z"></path>
                                <path fill="#e53935" d="M6.306,14.691l6.571,4.819C14.655,15.108,18.961,12,24,12c3.059,0,5.842,1.154,7.961,3.039	l5.657-5.657C34.046,6.053,29.268,4,24,4C16.318,4,9.656,8.337,6.306,14.691z"></path>
                                <path fill="#4caf50" d="M24,44c5.166,0,9.86-1.977,13.409-5.192l-6.19-5.238C29.211,35.091,26.715,36,24,36	c-5.202,0-9.619-3.317-11.283-7.946l-6.522,5.025C9.505,39.556,16.227,44,24,44z"></path>
                                <path fill="#1565c0" d="M43.611,20.083L43.595,20L42,20H24v8h11.303c-0.792,2.237-2.231,4.166-4.087,5.571	c0.001-0.001,0.002-0.001,0.003-0.002l6.19,5.238C36.971,39.205,44,34,44,24C44,22.659,43.862,21.35,43.611,20.083z"></path>
                            </svg>
                            <p class="text-sm font-semibold text-slate-700">Log in with Google</p>
                        </div>
                        <div class="w-full border-2 flex gap-1 p-2 justify-center items-center rounded-lg hover:bg-slate-100 transition duration-200 hover:border-opacity-0">
                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 50 50">
                                <path d="M 44.527344 34.75 C 43.449219 37.144531 42.929688 38.214844 41.542969 40.328125 C 39.601563 43.28125 36.863281 46.96875 33.480469 46.992188 C 30.46875 47.019531 29.691406 45.027344 25.601563 45.0625 C 21.515625 45.082031 20.664063 47.03125 17.648438 47 C 14.261719 46.96875 11.671875 43.648438 9.730469 40.699219 C 4.300781 32.429688 3.726563 22.734375 7.082031 17.578125 C 9.457031 13.921875 13.210938 11.773438 16.738281 11.773438 C 20.332031 11.773438 22.589844 13.746094 25.558594 13.746094 C 28.441406 13.746094 30.195313 11.769531 34.351563 11.769531 C 37.492188 11.769531 40.8125 13.480469 43.1875 16.433594 C 35.421875 20.691406 36.683594 31.78125 44.527344 34.75 Z M 31.195313 8.46875 C 32.707031 6.527344 33.855469 3.789063 33.4375 1 C 30.972656 1.167969 28.089844 2.742188 26.40625 4.78125 C 24.878906 6.640625 23.613281 9.398438 24.105469 12.066406 C 26.796875 12.152344 29.582031 10.546875 31.195313 8.46875 Z"></path>
                            </svg>
                            <p class="text-sm font-semibold text-slate-700">Log in with Apple</p>
                        </div>
                    </div>
                    <div class="container mt-7">
                        <label for="email" class="block mb-1 font-bold">Email Address</label>
                        <input type="text" name="email" class="w-full border-2 outline-none rounded-md p-2 transition duration-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-200 {{ $errors->has('email') ? 'border-red-500' : 'border-slate-300' }}" value="{{ old('email') }}">
                        @error('email')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="container mt-4 mb-7">
                        <label for="password" class="block mb-1 font-bold">Password</label>
                        <input type="password" name="password" class="w-full border-2 outline-none rounded-md p-2 transition duration-200 focus:border-blue-500 focus:ring-4 focus:ring-blue-200 {{ $errors->has('password') ? 'border-red-500' : 'border-slate-300' }}">
                        @error('password')
                        <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>

                    <button class="bg-gradient-to-r from-blue-600 to-teal-500 text-white px-4 py-3 text-base w-full font-semibold rounded-md focus:ring-8 focus:ring-blue-200 transition duration-200 hover:bg-opacity-85" type="submit">Login</button>
                    <p class="text-center mt-5 text-slate-600 font-normal">Don't have an account? <a href="/user/create" class="text-blue-600 font-normal hover:underline">Create Account</a></p>
                </div>
                <div class="relative w-full">
                    <img src="{{ asset('img/login.jpeg') }}" alt="Login Image" class="rounded-lg w-full">
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-transparent to-transparent rounded-lg"></div>
                    <div class="absolute inset-0 flex items-end justify-center pb-10 px-4">
                        <div class="flex flex-col">
                            <h1 class="text-white text-2xl font-medium">Welcome Back to Thirteen Blog</h1>
                            <p class="text-white text-sm">Enter your credential to access your account.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
    <script>
    document.getElementById('close-btn').addEventListener('click', function() {
      document.getElementById('alert').style.display = 'none';
    });
  </script>
</body>

</html>