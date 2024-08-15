<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ItemCategory;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'item_category_id',
        'name',
        'price_per_item',
        'stock',
        'detail',
    ];

    public function category()
    {
        return $this->belongsTo(ItemCategory::class, 'item_category_id');
    }
}
