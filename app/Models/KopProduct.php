<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KopProduct extends Model
{
    use HasFactory;

    protected $table = 'kop_products';

    protected $fillable = ['name', 'cover', 'kop_product_type_id', 'status'];

    protected $hidden = [
        'updated_at', 'created_at',
    ];

    protected $casts = [
        'status' => 'integer',
    ];
}
