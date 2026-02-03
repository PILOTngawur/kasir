@extends('layouts.app')

@section('content')
@include('includes.navbar')

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Pelanggan</div>
                <div class="card-body">
                    <form action="/pelanggan/store" method="POST">
                        @csrf
                        
                        <div class="form-group mb-3">
                            <label for="NamaPelanggan">Nama Pelanggan</label>
                            <input type="text" id="NamaPelanggan" name="NamaPelanggan" 
                                class="form-control @error('NamaPelanggan') is-invalid @enderror"
                                value="{{ old('NamaPelanggan') }}">
                            @error('NamaPelanggan')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="Alamat">Alamat</label>
                            <textarea id="Alamat" name="Alamat" rows="3" 
                                class="form-control @error('Alamat') is-invalid @enderror">{{ old('Alamat') }}</textarea>
                            @error('Alamat')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="NomorTelepon">Nomor Telepon</label>
                            <input type="tel" id="NomorTelepon" name="NomorTelepon" 
                                class="form-control @error('NomorTelepon') is-invalid @enderror"
                                value="{{ old('NomorTelepon') }}">
                            @error('NomorTelepon')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a href="/pelanggan" class="btn btn-secondary">Kembali</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection