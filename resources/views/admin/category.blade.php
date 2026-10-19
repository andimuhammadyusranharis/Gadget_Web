@extends('layout.admin')
@section('content')
    <h3 class="page-title">Data Kategori</h3>

    <div class="row">
        <!-- FORM KATEGORI -->
        <div class="col-md-4">
            <div class="admin-box">
                <h4 class="box-title">Tambah / Edit Kategori</h4>
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Nama Kategori</label>
                        <input class="input" type="text" name="name" placeholder="Nama Kategori">
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea class="input" name="description" rows="3" style="height: auto;" placeholder="Keterangan"></textarea>
                    </div>
                    <button type="submit" class="primary-btn">Simpan</button>
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
                            <tr>
                                <td>1</td>
                                <td>Laptops</td>
                                <td>24</td>
                                <td>
                                    <button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus kategori ini?')"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Smartphones</td>
                                <td>30</td>
                                <td>
                                    <button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus kategori ini?')"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Cameras</td>
                                <td>12</td>
                                <td>
                                    <button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus kategori ini?')"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Accessories</td>
                                <td>20</td>
                                <td>
                                    <button class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i></button>
                                    <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus kategori ini?')"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- /TABEL KATEGORI -->
    </div>
@endsection
