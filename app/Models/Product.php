<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'description',
        'price',
        'old_price',
        'stock',
        'image',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * URL gambar produk: hasil upload ada di storage, gambar bawaan ada di template.
     */
    protected function imageUrl(): Attribute
    {
        return Attribute::get(function (): string {
            if (! $this->image) {
                return asset('template/img/product01.png');
            }

            if (Str::startsWith($this->image, 'products/')) {
                return asset('storage/'.$this->image);
            }

            return asset('template/img/'.$this->image);
        });
    }
}
