@extends('layout.admin')
@section('content')
    <h3 class="page-title">Data Produk</h3>

    <div class="admin-box">
        <h4 class="box-title">
            Daftar Produk
            <button class="primary-btn pull-right" data-toggle="modal" data-target="#productModal">
                <i class="fa fa-plus"></i> Tambah Produk
            </button>
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
                    <tr>
                        <td>1</td>
                        <td><img src="{{ asset('template/img/product01.png') }}" alt=""></td>
                        <td>Laptop Pro 14</td>
                        <td>Laptops</td>
                        <td>$980.00</td>
                        <td>12</td>
                        <td>
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#productModal"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><img src="{{ asset('template/img/product02.png') }}" alt=""></td>
                        <td>Headphone Wireless</td>
                        <td>Accessories</td>
                        <td>$120.00</td>
                        <td>40</td>
                        <td>
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#productModal"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><img src="{{ asset('template/img/product07.png') }}" alt=""></td>
                        <td>Smartphone X</td>
                        <td>Smartphones</td>
                        <td>$650.00</td>
                        <td>25</td>
                        <td>
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#productModal"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><img src="{{ asset('template/img/product09.png') }}" alt=""></td>
                        <td>Kamera Mirrorless</td>
                        <td>Cameras</td>
                        <td>$1,200.00</td>
                        <td>8</td>
                        <td>
                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#productModal"><i class="fa fa-pencil"></i></button>
                            <button class="btn btn-sm btn-danger" data-toggle="modal" data-target="#deleteModal"><i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- MODAL FORM PRODUK -->
    <div class="modal fade" id="productModal" tabindex="-1">
        <div class="modal-dialog">
            <form class="modal-content" action="#" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Form Produk</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Nama Produk</label>
                        <input class="input" type="text" name="name" placeholder="Nama Produk">
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="input-select" name="category" style="width: 100%;">
                            <option value="">-- Pilih Kategori --</option>
                            <option>Laptops</option>
                            <option>Smartphones</option>
                            <option>Cameras</option>
                            <option>Accessories</option>
                        </select>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label>Harga</label>
                                <input class="input" type="number" name="price" placeholder="0">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <label>Stok</label>
                                <input class="input" type="number" name="stock" placeholder="0">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Deskripsi</label>
                        <textarea class="input" name="description" rows="4" style="height: auto;" placeholder="Deskripsi Produk"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Gambar</label>
                        <input type="file" name="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="primary-btn">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /MODAL FORM PRODUK -->

    <!-- MODAL HAPUS -->
    <div class="modal fade" id="deleteModal" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <form class="modal-content" action="#" method="POST">
                @csrf
                @method('DELETE')
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Hapus Produk</h4>
                </div>
                <div class="modal-body">
                    Yakin ingin menghapus produk ini?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /MODAL HAPUS -->
@endsection
