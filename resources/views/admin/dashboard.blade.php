@extends('layout.admin')
@section('content')
    <h3 class="page-title">Dashboard</h3>

    <!-- STATISTIK -->
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="stat-card">
                <i class="fa fa-money"></i>
                <h3>$12,480</h3>
                <p>Total Penjualan</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="stat-card">
                <i class="fa fa-shopping-cart"></i>
                <h3>320</h3>
                <p>Total Pesanan</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="stat-card">
                <i class="fa fa-cube"></i>
                <h3>86</h3>
                <p>Total Produk</p>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="stat-card">
                <i class="fa fa-users"></i>
                <h3>1,204</h3>
                <p>Total Pelanggan</p>
            </div>
        </div>
    </div>
    <!-- /STATISTIK -->

    <!-- GRAFIK -->
    <div class="row">
        <div class="col-md-8">
            <div class="admin-box">
                <h4 class="box-title">Penjualan Bulanan</h4>
                <canvas id="salesChart" height="130"></canvas>
            </div>
        </div>
        <div class="col-md-4">
            <div class="admin-box">
                <h4 class="box-title">Produk per Kategori</h4>
                <canvas id="categoryChart" height="260"></canvas>
            </div>
        </div>
    </div>
    <!-- /GRAFIK -->

    <!-- PESANAN TERBARU -->
    <div class="admin-box">
        <h4 class="box-title">Pesanan Terbaru</h4>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>No. Pesanan</th>
                        <th>Pelanggan</th>
                        <th>Tanggal</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>#INV-0012</td>
                        <td>Budi Santoso</td>
                        <td>18 Okt 2026</td>
                        <td>$980.00</td>
                        <td><span class="label label-success">Selesai</span></td>
                    </tr>
                    <tr>
                        <td>#INV-0011</td>
                        <td>Siti Aminah</td>
                        <td>17 Okt 2026</td>
                        <td>$2,940.00</td>
                        <td><span class="label label-info">Dikirim</span></td>
                    </tr>
                    <tr>
                        <td>#INV-0010</td>
                        <td>Andi Wijaya</td>
                        <td>17 Okt 2026</td>
                        <td>$450.00</td>
                        <td><span class="label label-warning">Diproses</span></td>
                    </tr>
                    <tr>
                        <td>#INV-0009</td>
                        <td>Rina Lestari</td>
                        <td>16 Okt 2026</td>
                        <td>$1,200.00</td>
                        <td><span class="label label-danger">Dibatalkan</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <a href="{{ route('admin.order') }}" class="primary-btn">Lihat Semua Pesanan</a>
    </div>
    <!-- /PESANAN TERBARU -->
@endsection

@push('scripts')
<script>
    // Grafik penjualan bulanan
    new Chart(document.getElementById('salesChart'), {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
            datasets: [{
                label: 'Penjualan ($)',
                data: [820, 950, 1100, 870, 1300, 1250, 1480, 1390, 1600, 1720, 0, 0],
                borderColor: '#D10024',
                backgroundColor: 'rgba(209, 0, 36, 0.1)',
                fill: true,
                tension: 0.3
            }]
        }
    });

    // Grafik produk per kategori
    new Chart(document.getElementById('categoryChart'), {
        type: 'doughnut',
        data: {
            labels: ['Laptops', 'Smartphones', 'Cameras', 'Accessories'],
            datasets: [{
                data: [24, 30, 12, 20],
                backgroundColor: ['#D10024', '#2B2D42', '#8D99AE', '#E4E7ED']
            }]
        }
    });
</script>
@endpush
