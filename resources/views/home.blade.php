@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 rounded-4 text-center shadow-sm border" style="background-color: #f4f7f2;">
    <div class="container-fluid py-4">
        <h1 class="display-5 fw-bold text-custom-primary">Katalog UMKM Siswa SMK</h1>
        <p class="col-md-8 fs-5 mx-auto text-secondary">
            Wadah publikasi dan promosi produk unggulan hasil karya siswa SMK secara digital.
        </p>
        <a href="{{ route('katalog.index') }}" class="btn btn-custom-primary btn-lg mt-3 px-4">Lihat Katalog Produk</a>
    </div>
</div>
@endsection
