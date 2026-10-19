@extends('layout.admin')
@section('content')
    <h3 class="page-title">Data Produk</h3>

    <div class="admin-box">
        <h4 class="box-title">
            Daftar Produk
            <a href="{{ route('admin.product.create') }}" class="primary-btn pull-right">
                <i class="fa fa-plus"></i> Tambah Produk
            </a>
        </h4>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td><img src="{{ $product->image_url }}" alt="{{ $product->name }}"></td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>${{ number_format($product->price, 2) }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>
                                <a href="{{ route('admin.product.edit', $product) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                                <form action="{{ route('admin.product.destroy', $product) }}" method="POST" style="display: inline;" onsubmit="return confirm('Hapus produk {{ $product->name }}?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Belum ada produk.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
@endsection
