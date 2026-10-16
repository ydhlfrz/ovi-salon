@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2>Kelola Service / Price List</h2>
        <a href="{{ route('admin.galleries.index') }}" class="btn btn-outline-secondary">Ke Halaman Kelola Galeri &rarr;</a>
    </div>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <!-- Form Upload Service Baru -->
    <div class="card p-4 mb-5 border-0 shadow-sm" style="background-color: var(--bg-secondary);">
        <h4 class="font-serif mb-3">Tambah Layanan Baru</h4>
        <form action="{{ route('admin.services.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row g-3">
                <div class="col-md-6">
                    <label class="form-label fw-bold">Pilih Kategori Service</label>
                    <select name="category" class="form-select" required>
                        <option value="">-- Pilih Kategori --</option>
                        <option value="Nail Service">1. Nail Service</option>
                        <option value="Eyelash Extensions">2. Eyelash Extensions</option>
                        <option value="Brow & Lashlift">3. Brow & Lashlift</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Nama Layanan / Treatment</label>
                    <input type="text" name="title" class="form-control" placeholder="Contoh: Soft Volume Set (2D/3D)" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Harga (Rp)</label>
                    <input type="number" name="price" class="form-control" placeholder="Contoh: 400000">
                </div>
                <div class="col-md-6">
                    <label class="form-label fw-bold">Upload Gambar (Opsional)</label>
                    <input type="file" name="image" class="form-control" accept="image/*">
                </div>
                <div class="col-md-12">
                    <label class="form-label fw-bold">Deskripsi / Catatan Perawatan</label>
                    <textarea name="description" class="form-control" rows="3" placeholder="Contoh: Includes brow lamination, shaving, brow tint..."></textarea>
                </div>
                <div class="col-md-12">
                    <button type="submit" class="btn-custom">Simpan Layanan</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Tabel Daftar Service -->
    <h4 class="font-serif mb-3">Daftar Layanan Saat Ini</h4>
    <div class="table-responsive bg-white shadow-sm p-3">
        <table class="table table-hover align-middle">
            <thead>
                <tr>
                    <th>Gambar</th>
                    <th>Kategori</th>
                    <th>Judul Layanan</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($services as $item)
                <tr>
                    <td>
                        @if($item->image)
                            <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->title }}" style="width: 70px; height: 50px; object-fit: cover;">
                        @else
                            <span class="text-muted small">No Image</span>
                        @endif
                    </td>
                    <td><span class="badge bg-secondary">{{ $item->category }}</span></td>
                    <td class="fw-bold">{{ $item->title }}</td>
                    <td>{{ $item->price ? 'Rp ' . number_format($item->price, 0, ',', '.') : '-' }}</td>
                    <td>
                        <form action="{{ route('admin.services.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus layanan ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger"><i class="bi bi-trash"></i> Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center text-muted">Belum ada layanan yang ditambahkan.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection