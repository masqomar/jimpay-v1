<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KopProductType extends Model
{
    use HasFactory;

    protected $table = 'kop_product_types';

    protected $fillable = ['name', 'cover', 'status'];

    protected $hidden = [
        'updated_at', 'created_at',
    ];

    protected $casts = [
        'status' => 'integer',
    ];
}
