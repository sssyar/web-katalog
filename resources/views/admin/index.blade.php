@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="text-custom-primary fw-bold">Kelola Data Produk (Admin)</h2>
    <a href="{{ route('admin.create') }}" class="btn btn-custom-primary">+ Tambah Produk</a>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
        <thead class="bg-custom-primary text-white">
            <tr>
                <th>Kode</th>
                <th>Nama</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th width="180">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($produks as $p)
                <tr>
                    <td>{{ $p->kode }}</td>
                    <td>{{ $p->nama }}</td>
                    <td>{{ $p->kategori }}</td>
                    <td>Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
                    <td>{{ $p->stok }}</td>
                    <td>
                        <a href="{{ route('admin.edit', $p->id) }}" class="btn btn-custom-warning btn-sm">Edit</a>
                        <form action="{{ route('admin.destroy', $p->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-custom-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6" class="text-center">Belum ada data produk.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
