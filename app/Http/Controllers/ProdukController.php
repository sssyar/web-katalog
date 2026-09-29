<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Halaman Home
    public function home()
    {
        return view('home');
    }

    // Halaman Katalog (dengan Fitur Pencarian)
    public function index(Request $request)
    {
        $query = Produk::query();

        if ($request->has('search')) {
            $search = $request->search;
            $query->where('nama', 'LIKE', "%{$search}%")
                  ->orWhere('kategori', 'LIKE', "%{$search}%");
        }

        $produks = $query->get();

        return view('katalog.index', compact('produks'));
    }

    // Halaman Detail Produk
    public function show($id)
    {
        $produk = Produk::findOrFail($id);

        return view('katalog.show', compact('produk'));
    }

    // Halaman Admin (Daftar CRUD)
    public function admin()
    {
        $produks = Produk::all();

        return view('admin.index', compact('produks'));
    }

    // Form Tambah Produk
    public function create()
    {
        return view('admin.create');
    }

    // Process Simpan Data Baru
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:produks',
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'deskripsi' => 'required',
        ]);

        Produk::create($request->all());

        return redirect()->route('admin.index')->with('success', 'Data produk berhasil ditambahkan!');
    }

    // Form Edit Produk
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);

        return view('admin.edit', compact('produk'));
    }

    // Process Update Data
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'deskripsi' => 'required',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update($request->all());

        return redirect()->route('admin.index')->with('success', 'Data produk berhasil diubah!');
    }

    // Process Hapus Data
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('admin.index')->with('success', 'Data produk berhasil dihapus!');
    }
}
