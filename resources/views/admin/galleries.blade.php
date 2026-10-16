@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Kelola Galeri Foto</h2>
        <a href="{{ route('admin.services.index') }}" class="btn btn-outline-secondary">&larr; Ke Halaman Kelola Layanan</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Form Upload Galeri -->
    <div class="card p-4 mb-5 border-0 shadow-sm" style="background-color: var(--bg-secondary);">
        <h4 class="font-serif mb-3">Upload Foto Hasil Pekerjaan</h4>
        <form action="{{ route('admin.galleries.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Upload Gambar</label>
                    <input type="file" name="image" class="form-control" accept="image/*" required>
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold">Judul / Keterangan (Opsional)</label>
                    <input type="text" name="title" class="form-control" placeholder="Contoh: Classic Lash">
                </div>
                <div class="col-md-3">
                    <label class="form-label fw-bold">Kategori (Opsional)</label>
                    <input type="text" name="category" class="form-control" placeholder="Contoh: Nails / Lash">
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn-custom">Upload Ke Galeri</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Grid Foto Galeri -->
    <h4 class="font-serif mb-3">Daftar Foto Galeri</h4>
    <div class="row g-3">
        @forelse($galleries as $item)
        <div class="col-6 col-md-3">
            <div class="card border-0 shadow-sm h-100">
                <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top" style="height: 180px; object-fit: cover;" alt="Galeri">
                <div class="card-body p-2 text-center">
                    <form action="{{ route('admin.galleries.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Hapus foto ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-outline-danger w-100"><i class="bi bi-trash"></i> Hapus</button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12 text-muted">Belum ada foto galeri yang di-upload.</div>
        @endforelse
    </div>
</div>
@endsection