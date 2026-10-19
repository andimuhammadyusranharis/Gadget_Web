{{-- Isi form produk, dipakai bersama oleh halaman tambah dan edit --}}
<div class="form-group">
    <label>Nama Produk</label>
    <input class="input" type="text" name="name" value="{{ old('name', $product->name ?? '') }}" placeholder="Nama Produk">
</div>
<div class="form-group">
    <label>Kategori</label>
    <select class="input-select" name="category_id" style="width: 100%;">
        <option value="">-- Pilih Kategori --</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @selected(old('category_id', $product->category_id ?? '') == $category->id)>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>
<div class="row">
    <div class="col-sm-4">
        <div class="form-group">
            <label>Harga</label>
            <input class="input" type="number" step="0.01" name="price" value="{{ old('price', $product->price ?? '') }}" placeholder="0">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label>Harga Lama (opsional)</label>
            <input class="input" type="number" step="0.01" name="old_price" value="{{ old('old_price', $product->old_price ?? '') }}" placeholder="Isi jika diskon">
        </div>
    </div>
    <div class="col-sm-4">
        <div class="form-group">
            <label>Stok</label>
            <input class="input" type="number" name="stock" value="{{ old('stock', $product->stock ?? 0) }}" placeholder="0">
        </div>
    </div>
</div>
<div class="form-group">
    <label>Deskripsi</label>
    <textarea class="input" name="description" rows="4" style="height: auto;" placeholder="Deskripsi Produk">{{ old('description', $product->description ?? '') }}</textarea>
</div>
<div class="form-group">
    <label>Gambar</label>
    @isset($product)
        <p><img src="{{ $product->image_url }}" alt="{{ $product->name }}" style="width: 100px;"></p>
        <small class="text-muted">Kosongkan jika tidak ingin mengganti gambar.</small>
    @endisset
    <input type="file" name="image" accept="image/*">
</div>
