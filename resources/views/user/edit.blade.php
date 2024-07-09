@extends('dashboard.index')

@section('container')
<h1 class="mb-5 text-2xl font-bold">Account Settings</h1>
<form action="/user/{{ $users->id }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="w-full bg-white border rounded-xl">
        <div class="flex justify-start gap-10 px-5 py-4">
            <div class="rounded-full w-36 h-36 overflow-hidden">
                <div class="rounded-full w-36 h-36 overflow-hidden">
                    <img src="{{ $users->image ? asset('storage/' . $users->image) : 'https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png' }}" alt="Avatar" class="rounded-full img-preview object-cover w-full h-full">
                </div>

            </div>

            <div class="w-auto flex justify-center items-center gap-4">
                <!-- Input file yang disembunyikan -->
                <input type="file" id="image" name="image" class="file-input hidden" onchange="previewImage()">

                <label for="image" class="px-4 py-2 rounded-md bg-blue-600 text-white font-semibold cursor-pointer hover:bg-blue-800">
                    Change Avatar
                </label>

                <button type="button" class="px-4 py-2 rounded-md bg-slate-200 font-semibold hover:bg-slate-300 transition">Delete Avatar</button>
            </div>
        </div>

        <div class="flex justify-start py-4 pl-5 pr-24 gap-8">
            <div class="block w-full">
                <label for="name" class="block font-semibold">Username <span class="text-red-600 text-lg">*</span></label>
                <input type="text" class="p-2 mt-1 border-2 border-slate-300 rounded-md focus:bg-slate-100 focus:border-blue-600 outline-none w-full" value="{{ old('name', $users->name)}}" name="name">
            </div>
            <div class="block w-full">
                <label for="email" class="block font-semibold">Email <span class="text-red-600 text-lg">*</span></label>
                <input type="text" class="p-2 mt-1 border-2 border-slate-300 rounded-md focus:bg-slate-100 focus:border-blue-600 outline-none w-full" value="{{ old('email', $users->email)}}" name="email">
            </div>
        </div>
        <div class="flex justify-start py-4 pl-5 pr-24 gap-8">
            <div class="block w-full">
                <label for="gender" class="block font-semibold">Gender <span class="text-red-600 text-lg">*</span></label>
                <select name="gender" id="" class="p-2 mt-1 border-2 border-slate-300 rounded-md focus:bg-slate-100 focus:border-blue-600 outline-none w-full">
                    <option value="Man" {{ old('gender', $users->gender) == 'Man' ? 'selected' : '' }}>Man</option>
                    <option value="Women" {{ old('gender', $users->gender) == 'Women' ? 'selected' : '' }}>Women</option>
                    <option value="Unknow" {{ old('gender', $users->gender) == 'Unknow' ? 'selected' : '' }}>Unknow</option>
                </select>
            </div>
            <div class="block w-full">
                <label for="telp" class="block font-semibold">No Telepon <span class="text-red-600 text-lg">*</span></label>
                <input type="number" class="p-2 mt-1 border-2 border-slate-300 rounded-md focus:bg-slate-100 focus:border-blue-600 outline-none w-full" value="{{ old('telp', $users->telp)}}" name="telp">
            </div>
        </div>
        <div class="w-full py-4 pl-5 pr-24">
            <label for="bio" class="block font-semibold">Bio</label>
            <textarea name="bio" id="" class="w-full border-2 border-slate-300 focus:bg-slate-50 outline-none p-4 rounded-md focus:border-blue-600 mt-1 min-h-32 resize-none">{{ old('bio', $users->bio)}}</textarea>
        </div>

        <div class="w-full p-5">
            <button class="px-4 py-3 bg-blue-600 text-white font-semibold text-sm rounded-lg mr-2" type="submit">Save Changes</button>
            <a href="/dashboard" class="px-4 py-3 bg-red-600 text-white font-semibold text-sm rounded-lg">Cancel</a>
        </div>
    </div>
</form>


<script>
    function previewImage() {

        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        const OfReader = new FileReader();
        OfReader.readAsDataURL(image.files[0]);

        OfReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection