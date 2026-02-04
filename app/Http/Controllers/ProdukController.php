<?php

namespace App\Http\Controllers;
use App\Models\Produk;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    //
    public function index(){
        $produks = Produk::paginate(5);
        return view('produk.index', compact('produks'));
    }
    public function create(){
        return view('produk.create');
    }
    public function store(Request $request){
        $request->validate([
            'NamaProduk' => 'required|string|max:250',
            'Harga' => 'required|numeric',
            'Stok' => 'required|integer',
        ]);

        Produk::create([
            'NamaProduk' => $request->NamaProduk,
            'Harga' => $request->Harga,
            'Stok' => $request->Stok,
        ]);

        return redirect()->route('produk.index')->with('succes', 'Produk berhasil ditambahkan');
    }
    public function edit($id){
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'NamaProduk' => 'required|string|max:250',
            'Harga' => 'required|numeric',
            'Stok' => 'required|integer',
        ]);

        $produk = Produk::findOrFail($id);
        $produk->update([
            'NamaProduk' => $request->NamaProduk,
            'Harga' => $request->Harga,
            'Stok' => $request->Stok,
        ]);

        return redirect()->route('produk.index')->with('succes', 'Poduk berhasil ditambahkan');
    }

    public function destroy($id){
        $produk = Produk::findOrFail($id);
        $produk -> delete();
        return redirect() -> route('produk.index') -> with('succes', 'berhsail haspush');
    }
}
