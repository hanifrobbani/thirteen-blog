<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class CrudUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = Auth::user();
        return view('post.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:3'],
        ]);

        try {
            User::create($validatedData);
            return redirect('/login')->with('success', 'Data berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect('/user/create')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $users = User::findOrFail($id);
        return view('user.show', compact('users'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::findOrFail($id);
        return view('user.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email'],
            'bio' => ['min:3'],
            'gender' => ['required'],
            'telp' => ['required', 'numeric'],
            'image' => ['nullable', 'image', 'file', 'max:5024'],
        ]);

        $user = User::findOrFail($id);

        // Jika ada file baru yang di-upload
        if ($request->hasFile('image')) {
            // Hapus file lama (jika ada)
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }

            // Simpan file baru dengan nama asli file
            $file = $request->file('image');
            $newFileName = time() . '-' . $file->getClientOriginalName();
            $newFilePath = $file->storeAs('img-store', $newFileName, 'public');
            $validatedData['image'] = $newFilePath;
        } else {
            // Jika tidak ada file baru, gunakan file lama (jika ada)
            $validatedData['image'] = $user->image;
        }

        try {
            $user->update($validatedData);
            return redirect("/user/{$id}/edit")->with('success', 'Data berhasil diubah!');
        } catch (\Exception $e) {
            return redirect("/user/{$id}/edit")->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
