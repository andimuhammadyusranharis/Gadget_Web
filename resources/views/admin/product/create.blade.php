@extends('layout.admin')
@section('content')
    <h3 class="page-title">Tambah Produk</h3>

    <div class="admin-box">
        <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            {{-- Komponen Form Produk --}}
            @include('admin.product.form')

            <a href="{{ route('admin.product.index') }}" class="btn btn-default">Batal</a>
            <button type="submit" class="primary-btn">Simpan</button>
        </form>
    </div>
@endsection
