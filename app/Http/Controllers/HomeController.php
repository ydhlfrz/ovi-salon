<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::latest()->get();
        // 8 Foto untuk preview di Home
        $previewGalleries = Gallery::latest()->take(8)->get();
        // Semua foto untuk Modal Galeri Lengkap
        $allGalleries = Gallery::latest()->get();

        return view('home', compact('services', 'previewGalleries', 'allGalleries'));
    }
}