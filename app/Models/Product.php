<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'slug',
        'badge',
        'material',
        'short_description',
        'description',
        'hardness',
        'temperature_range',
        'tensile_strength',
        'elongation',
        'standards',
        'min_order',
        'image_url',
        'specifications',
        'variants',
        'is_featured',
    ];

    protected $casts = [
        'specifications' => 'array',
        'variants' => 'array',
        'is_featured' => 'boolean',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function inquiries(): HasMany
    {
        return $this->hasMany(Inquiry::class, 'product_id');
    }
}

