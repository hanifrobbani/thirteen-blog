<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::where('create_by', auth()->user()->name)->get();
        return view('post.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => ['required', 'max:99', 'min:5'],
            'jenis_id' => ['required'],
            'content' => ['required', 'min:10'],
            'image' => ['nullable', 'image', 'file', 'max:5024'],
        ]);

        // Handle the file upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $newFileName = time() . '-' . $file->getClientOriginalName();
            $newFilePath = $file->storeAs('img-store', $newFileName, 'public');
            $validatedData['image'] = $newFilePath;
        }

        // Ensure the user is authenticated and has a name attribute
        if (auth()->check()) {
            $create_by = auth()->user()->name;

            Blog::create(array_merge($validatedData, ['create_by' => $create_by]));
            return redirect('/blog')->with('success', 'Data berhasil ditambahkan!');
        } else {
            return redirect('/blog/create')->with('error', 'Data gagal di tambahkan.');
        }
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blogs = Blog::with('jenis', 'comments.user')->findOrFail($id);
        return view('post.show', compact('blogs'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blogs = Blog::findOrFail($id);
        return view('post.edit', compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'judul' => ['required', 'max:50', 'min:2'],
            'jenis_id' => ['required'],
            'content' => ['required', 'min:10'],
            'image' => ['image', 'file', 'max:5024'],
        ]);

        $blogs = Blog::findOrFail($id);

        // Jika ada file baru yang di-upload
        if ($request->hasFile('image')) {
            // Hapus file lama (jika ada)
            if ($blogs->image) {
                Storage::disk('public')->delete($blogs->image);
            }

            // Simpan file baru dengan nama asli file
            $file = $request->file('image');
            $newFileName = time() . '-' . $file->getClientOriginalName();
            $newFilePath = $file->storeAs('img-store', $newFileName, 'public');
            $validatedData['image'] = $newFilePath;
        } else {
            // Jika tidak ada file baru, gunakan file lama (jika ada)
            $validatedData['image'] = $blogs->image;
        }

        try {
            $blogs->update($validatedData);
            return redirect("/blog")->with('success', 'Data berhasil diubah!');
        } catch (\Exception $e) {
            return redirect("/user")->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogs = Blog::findOrFail($id);

        $blogs->delete();

        return redirect('/blog')->with('success', 'Data Berhasil Dihapus!');
    }
}
