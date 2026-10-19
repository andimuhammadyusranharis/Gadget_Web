@extends('layout.admin')
@section('content')
    <h3 class="page-title">Edit Produk</h3>

    <div class="admin-box">
        <form action="{{ route('admin.product.update', $product) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{-- Komponen Form Produk --}}
            @include('admin.product.form')

            <a href="{{ route('admin.product.index') }}" class="btn btn-default">Batal</a>
            <button type="submit" class="primary-btn">Simpan Perubahan</button>
        </form>
    </div>
@endsection
