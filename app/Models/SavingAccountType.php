<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavingAccountType extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'description'];

    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
