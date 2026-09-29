@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="text-custom-primary fw-bold">Daftar Produk</h2>
    <form action="{{ route('katalog.index') }}" method="GET" class="d-flex" style="max-width: 300px;">
        <input type="text" name="search" class="form-control me-2" placeholder="Cari produk/kategori..." value="{{ request('search') }}">
        <button type="submit" class="btn btn-custom-outline">Cari</button>
    </form>
</div>

<div class="row row-cols-1 row-cols-md-4 g-4">
    @forelse($produks as $produk)
        <div class="col">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-body">
                    <span class="badge bg-custom-primary mb-2">{{ $produk->kategori }}</span>
                    <h5 class="card-title fw-bold">{{ $produk->nama }}</h5>
                    <p class="card-text text-muted small">{{ Str::limit($produk->deskripsi, 60) }}</p>
                    <h6 class="text-custom-primary fw-bold">Rp {{ number_format($produk->harga, 0, ',', '.') }}</h6>
                    <small class="text-muted">Stok: {{ $produk->stok }}</small>
                </div>
                <div class="card-footer bg-white border-top-0">
                    <a href="{{ route('katalog.show', $produk->id) }}" class="btn btn-sm btn-custom-outline w-100">Detail Produk</a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12">
            <p class="text-center text-muted">Produk tidak ditemukan.</p>
        </div>
    @endforelse
</div>
@endsection
