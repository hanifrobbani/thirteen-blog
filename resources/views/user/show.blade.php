@extends('dashboard.index')

@section('container')
<!-- <div class="w-full flex justify-center py-8">
    <div class="min-w-72 mx-auto p-4 bg-white border-r-2 rounded-l-lg">
        <div class="flex gap-2">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 12H20M4 12L8 8M4 12L8 16" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
            </svg>
            <a href="/blog" class="text-blue-500 hover:underline mb-4 inline-block">Go Back</a>
        </div>
        <div class="flex flex-col items-center text-center">
            <div class="w-44 h-44 mb-4">
                <img src="{{ $users->image ? asset('storage/' . $users->image) : 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png' }}" alt="Avatar" class="rounded-full object-cover w-full h-full">
            </div>
            <h1 class="text-2xl font-semibold">{{ $users->name }}</h1>
            <p class="text-gray-600 text-center px-4 font-medium">Active Member since {{ $users->created_at->isoFormat('MMMM D, YYYY') }}</p>
        </div>
    </div>
    <div class="container mx-auto py-4 px-7 bg-white rounded-r-lg">
        <h1 class="text-xl font-bold text-center mb-10">Account Setting</h1>
        <div class="flex justify-between mb-4">
            <p class="font-semibold">General Setting</p>
            <div class="w-auto flex gap-2">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M11 4H7.2C6.0799 4 5.51984 4 5.09202 4.21799C4.71569 4.40974 4.40973 4.7157 4.21799 5.09202C4 5.51985 4 6.0799 4 7.2V16.8C4 17.9201 4 18.4802 4.21799 18.908C4.40973 19.2843 4.71569 19.5903 5.09202 19.782C5.51984 20 6.0799 20 7.2 20H16.8C17.9201 20 18.4802 20 18.908 19.782C19.2843 19.5903 19.5903 19.2843 19.782 18.908C20 18.4802 20 17.9201 20 16.8V12.5M15.5 5.5L18.3284 8.32843M10.7627 10.2373L17.411 3.58902C18.192 2.80797 19.4584 2.80797 20.2394 3.58902C21.0205 4.37007 21.0205 5.6364 20.2394 6.41745L13.3774 13.2794C12.6158 14.0411 12.235 14.4219 11.8012 14.7247C11.4162 14.9936 11.0009 15.2162 10.564 15.3882C10.0717 15.582 9.54378 15.6885 8.48793 15.9016L8 16L8.04745 15.6678C8.21536 14.4925 8.29932 13.9048 8.49029 13.3561C8.65975 12.8692 8.89125 12.4063 9.17906 11.9786C9.50341 11.4966 9.92319 11.0768 10.7627 10.2373Z" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
                <a class="text-blue-600 font-medium" href="/user/{{ Auth::user()->id }}/edit">Edit</a>
            </div>
        </div>
        <div class="flex justify-between mb-4 text-slate-500 font-medium">
            <p>Email:</p>
            <p>{{ $users->email }}</p>
        </div>
        <div class="flex justify-between mb-4 text-slate-500 font-medium">
            <p>No Telp:</p>
            <p>{{ $users->telp }}</p>
        </div>
        <div class="w-full mt-4 border-t-2">
            <p class="font-semibold mt-2">Bio:</p>
            <p>{{ $users->bio }}</p>
        </div>
    </div>
</div> -->
<p class="font-bold text-2xl mb-7">Edit Profile</p>
<div class="w-full bg-white px-10 py-5 rounded-lg">
    <div class="w-full flex gap-1 mb-5">
        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M4 12H20M4 12L8 8M4 12L8 16" stroke="#000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
        <a href="/blog" class="text-black hover:underline mb-4 inline-block font-semibold">Go Back</a>
    </div>

    <div class="w-full flex justify-start gap-5 mb-20">
        <div class="w-40 h-40">
            <img src="{{ $users->image ? asset('storage/' . $users->image) : 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png' }}" alt="Avatar" class="rounded-full object-cover w-full h-full">
        </div>
        <div class="w-auto flex justify-center items-start flex-col gap-2">
            <h1 class="text-2xl font-semibold">{{ $users->name }}</h1>
            <p class="text-gray-600 font-normal">Active Member since <span class="text-black font-medium">{{ $users->created_at->isoFormat('MMMM D, YYYY') }}</span></p>
        </div>
    </div>

    <div class="w-full border-2 px-5 py-3 rounded-xl">
        <div class="w-full flex justify-between">
            <p class="font-bold text-lg ">Personal Info</p>
            <a href="" class="flex border-2 transition-all duration-200 hover:border-black p-2 px-4 rounded-xl"><svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd" />
                    <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd" />
                </svg>
                <p class="font-medium">Edit</p>
            </a>
        </div>
        <div class="w-full flex justify-between pr-40">
            <div class="flex flex-col mb-2">
                <p class="text-lg text-gray-600">Email</p>
                <p class="font-bold">{{ $users->email }}</p>
            </div>
            <div class="flex flex-col mb-2">
                <p class="text-lg text-gray-600">Phone</p>
                <p class="font-bold">{{ $users->telp }}</p>
            </div>
            <div class="flex flex-col mb-2">
                <p class="text-lg text-gray-600">Gender</p>
                <p class="font-bold">{{ $users->gender }}</p>
            </div>
        </div>
    </div>

    <div class="w-full h-52 border-2 mt-10 rounded-xl px-4 py-3">
        <p class="font-bold text-lg mb-2">Bio</p>
        <p class="font-normal text-gray-700">{{ $users->bio }}</p>
    </div>
</div>

@endsection