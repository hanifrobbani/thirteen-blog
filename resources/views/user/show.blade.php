@extends('dashboard.index')

@section('container')
<div class="w-full flex justify-center py-8">
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
</div>

@endsection