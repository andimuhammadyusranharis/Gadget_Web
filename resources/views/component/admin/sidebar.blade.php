<!-- SIDEBAR -->
<aside id="admin-sidebar">
    <div class="sidebar-title">Menu Utama</div>
    <ul>
        <li class="{{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <a href="{{ route('admin.dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a>
        </li>
        <li class="{{ request()->routeIs('admin.product.*') ? 'active' : '' }}">
            <a href="{{ route('admin.product.index') }}"><i class="fa fa-cube"></i> Produk</a>
        </li>
        <li class="{{ request()->routeIs('admin.category.*') ? 'active' : '' }}">
            <a href="{{ route('admin.category.index') }}"><i class="fa fa-tags"></i> Kategori</a>
        </li>
        <li class="{{ request()->routeIs('admin.order') ? 'active' : '' }}">
            <a href="{{ route('admin.order') }}"><i class="fa fa-shopping-cart"></i> Pesanan</a>
        </li>
    </ul>

    <div class="sidebar-title">Lainnya</div>
    <ul>
        <li><a href="/"><i class="fa fa-globe"></i> Lihat Toko</a></li>
        <li><a href="#"><i class="fa fa-sign-out"></i> Logout</a></li>
    </ul>
</aside>
<!-- /SIDEBAR -->
