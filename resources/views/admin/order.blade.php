@extends('layout.admin')
@section('content')
    <h3 class="page-title">Data Pesanan</h3>

    <div class="admin-box">
        <h4 class="box-title">Daftar Pesanan</h4>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No. Pesanan</th>
                        <th>Pelanggan</th>
                        <th>Alamat</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#INV-0012</td>
                        <td>Budi Santoso</td>
                        <td>Jl. Merdeka No. 10, Makassar</td>
                        <td>18 Okt 2026</td>
                        <td>$980.00</td>
                        <td><span class="label label-success">Selesai</span></td>
                        <td><button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#statusModal"><i class="fa fa-pencil"></i> Status</button></td>
                    </tr>
                    <tr>
                        <td>#INV-0011</td>
                        <td>Siti Aminah</td>
                        <td>Jl. Sudirman No. 5, Jakarta</td>
                        <td>17 Okt 2026</td>
                        <td>$2,940.00</td>
                        <td><span class="label label-info">Dikirim</span></td>
                        <td><button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#statusModal"><i class="fa fa-pencil"></i> Status</button></td>
                    </tr>
                    <tr>
                        <td>#INV-0010</td>
                        <td>Andi Wijaya</td>
                        <td>Jl. Diponegoro No. 3, Bandung</td>
                        <td>17 Okt 2026</td>
                        <td>$450.00</td>
                        <td><span class="label label-warning">Diproses</span></td>
                        <td><button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#statusModal"><i class="fa fa-pencil"></i> Status</button></td>
                    </tr>
                    <tr>
                        <td>#INV-0009</td>
                        <td>Rina Lestari</td>
                        <td>Jl. Pahlawan No. 8, Surabaya</td>
                        <td>16 Okt 2026</td>
                        <td>$1,200.00</td>
                        <td><span class="label label-danger">Dibatalkan</span></td>
                        <td><button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#statusModal"><i class="fa fa-pencil"></i> Status</button></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- MODAL UBAH STATUS -->
    <div class="modal fade" id="statusModal" tabindex="-1">
        <div class="modal-dialog modal-sm">
            <form class="modal-content" action="#" method="POST">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Ubah Status</h4>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>Status Pesanan</label>
                        <select class="input-select" name="status" style="width: 100%;">
                            <option>Diproses</option>
                            <option>Dikirim</option>
                            <option>Selesai</option>
                            <option>Dibatalkan</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
                    <button type="submit" class="primary-btn">Simpan</button>
                </div>
            </form>
        </div>
    </div>
    <!-- /MODAL UBAH STATUS -->
@endsection
