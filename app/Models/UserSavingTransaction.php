<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserSavingTransaction extends Model
{
    use HasFactory;

    protected $fillable = ['saving_transaction_image', 'kop_product_id', 'user_id', 'status', 'amount', 'transaction_date', 'description'];

    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
