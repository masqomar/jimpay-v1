<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SavingAccount extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'code', 'saving_account_type_id'];

    protected $hidden = [
        'updated_at', 'created_at',
    ];
}
