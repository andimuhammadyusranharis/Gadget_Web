<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('admin can see the category list', function () {
    Category::factory()->create(['name' => 'Laptops']);

    $this->get(route('admin.category.index'))
        ->assertOk()
        ->assertSee('Laptops');
});

test('admin can create a category', function () {
    $this->post(route('admin.category.store'), [
        'name' => 'Gaming Gear',
        'description' => 'Perlengkapan gaming',
    ])->assertRedirect(route('admin.category.index'));

    expect(Category::where('slug', 'gaming-gear')->exists())->toBeTrue();
});

test('category name is required and must be unique', function () {
    Category::factory()->create(['name' => 'Laptops']);

    $this->post(route('admin.category.store'), ['name' => ''])
        ->assertSessionHasErrors('name');

    $this->post(route('admin.category.store'), ['name' => 'Laptops'])
        ->assertSessionHasErrors('name');
});

test('admin can update a category', function () {
    $category = Category::factory()->create(['name' => 'Laptops']);

    $this->get(route('admin.category.edit', $category))
        ->assertOk()
        ->assertSee('Edit Kategori');

    $this->put(route('admin.category.update', $category), ['name' => 'Notebooks'])
        ->assertRedirect(route('admin.category.index'));

    expect($category->fresh())
        ->name->toBe('Notebooks')
        ->slug->toBe('notebooks');
});

test('deleting a category also deletes its products', function () {
    $category = Category::factory()->has(Product::factory()->count(2))->create();

    $this->delete(route('admin.category.destroy', $category))
        ->assertRedirect(route('admin.category.index'));

    expect(Category::count())->toBe(0)
        ->and(Product::count())->toBe(0);
});
