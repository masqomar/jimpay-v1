<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSaving extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'kop_product_id', 'amount', 'month', 'year', 'deposit_date', 'description'];
}
