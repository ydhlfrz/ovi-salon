<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    /**
     * Menampilkan daftar foto galeri di halaman admin
     */
    public function index()
    {
        $galleries = Gallery::latest()->get();
        return view('admin.galleries', compact('galleries'));
    }

    /**
     * Menyimpan foto galeri baru ke database & upload gambar
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,webp|max:2048',
            'title' => 'nullable|string',
            'category' => 'nullable|string',
        ]);

        $imagePath = $request->file('image')->store('galleries', 'public');

        Gallery::create([
            'title' => $request->title,
            'category' => $request->category,
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Foto galeri berhasil diunggah!');
    }

    /**
     * Menghapus foto galeri dan file gambarnya
     */
    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        if ($gallery->image) {
            Storage::disk('public')->delete($gallery->image);
        }
        $gallery->delete();

        return redirect()->back()->with('success', 'Foto galeri berhasil dihapus!');
    }
}