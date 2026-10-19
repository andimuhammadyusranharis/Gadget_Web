<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

uses(RefreshDatabase::class);

test('admin can see the product list', function () {
    Product::factory()->create(['name' => 'Laptop Pro 14']);

    $this->get(route('admin.product.index'))
        ->assertOk()
        ->assertSee('Laptop Pro 14');
});

test('admin can create a product with an image', function () {
    Storage::fake('public');
    $category = Category::factory()->create();

    $this->get(route('admin.product.create'))->assertOk();

    $this->post(route('admin.product.store'), [
        'category_id' => $category->id,
        'name' => 'Laptop Pro 14',
        'price' => 980,
        'old_price' => 1200,
        'stock' => 12,
        'image' => UploadedFile::fake()->image('laptop.png'),
    ])->assertRedirect(route('admin.product.index'));

    $product = Product::firstWhere('slug', 'laptop-pro-14');

    expect($product)->not->toBeNull()
        ->and($product->image)->toStartWith('products/');
    Storage::disk('public')->assertExists($product->image);
});

test('product fields are validated', function () {
    $this->post(route('admin.product.store'), [
        'category_id' => 999,
        'name' => '',
        'price' => 500,
        'old_price' => 100,
        'stock' => -1,
    ])->assertSessionHasErrors(['category_id', 'name', 'old_price', 'stock']);
});

test('admin can update a product and replace its image', function () {
    Storage::fake('public');
    $oldImage = UploadedFile::fake()->image('old.png')->store('products', 'public');
    $product = Product::factory()->create(['image' => $oldImage]);

    $this->get(route('admin.product.edit', $product))->assertOk();

    $this->put(route('admin.product.update', $product), [
        'category_id' => $product->category_id,
        'name' => 'Nama Baru',
        'price' => 100,
        'stock' => 5,
        'image' => UploadedFile::fake()->image('new.png'),
    ])->assertRedirect(route('admin.product.index'));

    $product->refresh();

    expect($product->name)->toBe('Nama Baru')
        ->and($product->slug)->toBe('nama-baru');
    Storage::disk('public')->assertMissing($oldImage);
    Storage::disk('public')->assertExists($product->image);
});

test('admin can delete a product', function () {
    $product = Product::factory()->create();

    $this->delete(route('admin.product.destroy', $product))
        ->assertRedirect(route('admin.product.index'));

    expect(Product::count())->toBe(0);
});

test('image url points to template for seeded images and storage for uploads', function () {
    $seeded = Product::factory()->make(['image' => 'product01.png']);
    $uploaded = Product::factory()->make(['image' => 'products/abc.png']);

    expect($seeded->image_url)->toEndWith('/template/img/product01.png')
        ->and($uploaded->image_url)->toEndWith('/storage/products/abc.png');
});
