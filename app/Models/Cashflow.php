<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cashflow extends Model
{
    use HasFactory;

    protected $fillable = ['amount', 'saving_account_id', 'type', 'description', 'date', 'cashflow_image'];

    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
