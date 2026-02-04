<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use SebastianBergmann\CodeUnit\CodeUnit;

class PelangganController extends Controller
{
    //
    public function index(){
        $pelanggans = Pelanggan::simplePaginate(10);
        return view('pelanggan.index', compact('pelanggans'));
    }
    public function create(){
        return view('pelanggan.create');
    }
    public function store (Request $request){
        $request->validate([
            'NamaPelanggan' => 'required|string|max:255',
            'Alamat' => 'required|string',
            'NomorTlp' => 'required|string|max:16'
        ]);

        Pelanggan::create([
            'NamaPelanggan' => $request -> NamaPelanggan,
            'Alamat' => $request -> Alamat,
            'NomorTlp' => $request -> NomorTlp,

        ]);

        return redirect()-> route('pelanggan.index') -> with ('succes', 'pelanggan berashil di ismpah');
    }

    public function edit($id){
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    public function update(Request $request, $id){
        $request->validate([
        'NamaPelanggan' => 'required|string|max:255',
        'Alamat' => 'required|string',
        'NomorTlp' => 'required|string|max:16'
        ]);

        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan -> update([
            'NamaPelanggan' => $request -> NamaPelanggan,
            'Alamat' => $request -> Alamat,
            'NomorTlp' => $request -> NomorTlp,
        ]);

        return redirect()->route('pelanggan.index') -> with('succes', 'Berhasil update');
    }

    public function destroy($id){
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan -> delete();
        return redirect() -> route('pelanggan.index') -> with('succes', 'berhsail haspush');
    }
}
