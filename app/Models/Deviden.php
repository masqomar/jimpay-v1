<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deviden extends Model
{
    use HasFactory;

    protected $fillable = ['operational_reserve', 'capital', 'user_capital', 'user_activity', 'management'];

    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
