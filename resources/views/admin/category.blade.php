@extends('layout.admin')
@section('content')
    <h3 class="page-title">Data Kategori</h3>

    <div class="row">
        <!-- FORM KATEGORI -->
        <div class="col-md-4">
            <div class="admin-box">
                {{-- Jika ada $category berarti mode edit, jika tidak berarti mode tambah --}}
                <h4 class="box-title">{{ isset($category) ? 'Edit' : 'Tambah' }} Kategori</h4>
                <form action="{{ isset($category) ? route('admin.category.update', $category) : route('admin.category.store') }}" method="POST">
                    @csrf
                    @isset($category)
                        @method('PUT')
                    @endisset
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input class="input" type="text" name="name" value="{{ old('name', $category->name ?? '') }}" placeholder="Nama Kategori">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="input" name="description" rows="3" style="height: auto;" placeholder="Keterangan">{{ old('description', $category->description ?? '') }}</textarea>
                    </div>
                    <button type="submit" class="primary-btn">Simpan</button>
                    @isset($category)
                        <a href="{{ route('admin.category.index') }}" class="btn btn-default">Batal</a>
                    @endisset
                </form>
            </div>
        </div>
        <!-- /FORM KATEGORI -->

        <!-- TABEL KATEGORI -->
        <div class="col-md-8">
            <div class="admin-box">
                <h4 class="box-title">Daftar Kategori</h4>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Kategori</th>
                                <th>Jumlah Produk</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($categories as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->products_count }}</td>
                                    <td>
                                        <a href="{{ route('admin.category.edit', $item) }}" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></a>
                                        <form action="{{ route('admin.category.destroy', $item) }}" method="POST" style="display: inline;" onsubmit="return confirm('Hapus kategori {{ $item->name }}? Semua produk di dalamnya ikut terhapus.')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center">Belum ada kategori.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /TABEL KATEGORI -->
    </div>
@endsection
