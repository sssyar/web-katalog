@extends('layouts.app')

@section('content')
<div class="card mx-auto shadow-sm border-0" style="max-width: 600px;">
    <div class="card-body p-4">
        <span class="badge bg-custom-primary mb-3">{{ $produk->kategori }}</span>
        <h3 class="card-title fw-bold">{{ $produk->nama }}</h3>
        <p class="text-muted mb-2">Kode Produk: <strong>{{ $produk->kode }}</strong></p>

        <!-- Warna harga diubah menggunakan text-custom-primary (Hijau Sage) -->
        <h4 class="text-custom-primary fw-bold my-3 fs-2">Rp {{ number_format($produk->harga, 0, ',', '.') }}</h4>

        <p class="mb-3"><strong>Stok Tersedia:</strong> <span class="badge bg-light text-dark border">{{ $produk->stok }} Pcs</span></p>
        <hr>
        <h5 class="fw-bold">Deskripsi Produk</h5>
        <p class="card-text text-secondary">{{ $produk->deskripsi }}</p>

        <a href="{{ route('katalog.index') }}" class="btn btn-custom-outline mt-3">Kembali ke Katalog</a>
    </div>
</div>
@endsection
