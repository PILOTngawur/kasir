@extends('layouts.app')

@section('content')
@include('includes.navbar')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Produk</div>
                <div class="card-body">
                    <form action="/produk/store" method="POST">
                        @csrf
                        
                        <div class="form-group mb-3">
                            <label for="NamaProduk">Nama Produk</label>
                            <input type="text" id="NamaProduk" name="NamaProduk" 
                                class="form-control @error('NamaProduk') is-invalid @enderror"
                                value="{{ old('NamaProduk') }}">
                            @error('NamaProduk')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="Harga">Harga</label>
                            <textarea id="Harga" name="Harga" rows="3" 
                                class="form-control @error('Harga') is-invalid @enderror">{{ old('Harga') }}</textarea>
                            @error('Harga')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="Stok">Stok</label>
                            <input id="Stok" name="Stok" 
                                class="form-control @error('Stok') is-invalid @enderror"
                                value="{{ old('Stok') }}">
                            @error('Stok')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/produk" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection