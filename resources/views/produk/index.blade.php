@extends ('layouts.app')
@section('content')
    @include('includes.navbar')
    <div class="container">
        <div class="row">
            <div class="d-flex justify-content-center">
                <div class="col-8">
                    @if (session()->has('success'))
                        <div class="alert alert-succes">
                            {{ session('succes') }}
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            data produk
                        </div>

                        <div class="card-body">
                            <div class="d-flex justify-content-end">
                                <a href="/produk/create" class="btn btn-secondary">tambah produk</a>
                            </div>

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Produk</th>
                                        <th>Harga</th>
                                        <th>Stok</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @forelse ($produks as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->NamaProduk }}</td>
                                            <td>{{ $item->Harga }}</td>
                                            <td>{{ $item->Stok }}</td>
                                            <td><a href="/produk/edit/{{ $item->ProdukId }}"
                                                    class="btn btn-warning">Edit</a>
                                                <form action="/produk/delete/{{ $item->ProdukId }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                                </form>
                                            </td>

                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5">Tidak ada data produk</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $produks->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
